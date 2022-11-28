<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('public.carrito', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {

        $url = "http://apirony.000webhostapp.com/api/GetAllClothes"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        foreach($productos as $pro){
            if($pro->name == $request->name && $pro->size == $request->size){
                $true_id = $pro->id;
            }
        }


        \Cart::add([
            'id' => $true_id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'type_clothes_id' => $request->type_clothes_id,
                'type_costumer_clothe' => $request->type_costumer_clothe,
                'size' => $request->size,
                'description' => $request->description,
                'stock' => $request->stock,
                'img' => $request->img,
            ),
        ]);

        session()->flash('success', 'El producto ha sido añadido correctamente');
        // $cartItems = \Cart::getContent();

        // dd($cartItems);
        return redirect()->route('cart.list');

        // dd($request);
    }

    public function updateCart(Request $request)
    {

        $item = \Cart::get($request->id);

        $producto = $item->toArray();

        $stock_producto = $producto['attributes']['stock'];

        if($request->quantity <= $stock_producto){
            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );

            session()->flash('success', 'El producto se actualizó correctamente');

            return redirect()->route('cart.list');
        }else{
            session()->flash('success', 'El producto no se actualizó porque no hay suficiente en el inventario, prueba con un número menor');

            return redirect()->route('cart.list');
        }

    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'El producto se removió correctamente');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Se vació el carrito satisfactoriamente');

        return redirect()->route('cart.list');
    }

    public function getCart()
    {
        $cartItems = \Cart::getContent();

        $array = $cartItems->toArray();

        dd($array);

        // foreach($array as $ar){
        //     $cart = new Cart();

        //     $cart->name = $ar['name'];

        //     $cart->save();
        // }

        
    }

    public function confirmSale(){
        $productos = \Cart::getContent();
        // dd($cartItems);
        return view('public.confirmar', compact('productos'));
    }

    public function createSale()
    {
        $url = "http://apirony.000webhostapp.com/api/createsale"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $last_id_sale = json_decode($response->getBody());

        //ahora creamos todos los detailsale

        $cartItems = \Cart::getContent();
        $array = $cartItems->toArray(); //obtenemos todos los productos con el array del carrito

        $url = "http://apirony.000webhostapp.com/api/createdetailsale";

        $subtotal_sale = 0;

        foreach ($array as $ar) { //aqui ya creamos todos los detailsale necesarios
            $total_detailsale = $ar['quantity'] * $ar['price'];

            $response = Http::post(
                $url,
                [
                    'folio_sale' => $last_id_sale,
                    'id_clothe' => $ar['id'],
                    'amount' => $ar['quantity'],
                    'price_u' => $ar['price'],
                    'total' => $total_detailsale,
                ]
            );

            $subtotal_sale = $subtotal_sale + $total_detailsale;
        }

        //ahora con esto actualizamos los demas campos de la venta y quedaría listo
        $url = "http://apirony.000webhostapp.com/api/updatesale/" . strval($last_id_sale);

        $response = Http::post(
            $url,
            [
                'subtotal' => $subtotal_sale,
                '_method' => 'PUT'
            ]
        );

        $respuesta = json_decode($response->getBody());

        \Cart::clear();

        session()->flash('venta', 'activarmodal');

        return redirect()->route('cart.list');
    }
}
