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
        return view('carrito(prueba).cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

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

    public function createSale()
    {
        $url = "http://127.0.0.1:8000/api/createsale"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $last_id_sale = json_decode($response->getBody());

        //ahora creamos todos los detailsale

        $cartItems = \Cart::getContent();
        $array = $cartItems->toArray(); //obtenemos todos los productos con el array del carrito

        $url = "http://127.0.0.1:8000/api/createdetailsale";

        $subtotal_sale = 0;

        foreach($array as $ar){ //aqui ya creamos todos los detailsale necesarios
            $total_detailsale = $ar['quantity'] * $ar['price'];

            $response = Http::post(
                $url,
                [
                    'folio_sale' => $last_id_sale,
                    'id_clothe' => /*$ar['id']*/ 2,
                    'amount' => $ar['quantity'],
                    'price_u' => $ar['price'],
                    'total' => $total_detailsale,
                ]
            );

            $subtotal_sale = $subtotal_sale + $total_detailsale;
        }

        //ahora con esto actualizamos los demas campos de la venta y quedaría listo
        $url = "http://127.0.0.1:8000/api/updatesale/" . strval($last_id_sale) ;

        $response = Http::post(
            $url,
            [
                'subtotal' => $subtotal_sale,
                '_method' => 'PUT'
            ]
        );

        $respuesta = json_decode($response->getBody());

        dd($respuesta);
        
    }
}
