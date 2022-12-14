<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ClotheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Clothes = DB::select('SELECT DISTINCT NAME,description,price FROM Clothes');

        // return response()->json($Clothes,200);

        // return view('public.catalogo');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Product = Clothes::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return response()->json(['Product' => $Product, 'mensaje' => 'Producto registrado'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clothes  $Clothes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = Clothes::findOrFail($id);

        return response()->json([$Product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clothes  $Clothes
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clothes  $Clothes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Clothes::findOrFail($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description
        ]);

        $Product = Clothes::findOrFail($id);

        return response()->json(['Product' => $Product, 'mensaje' => 'Producto Actualizad\o'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clothes  $Clothes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clothes::destroy($id);

        $Product = Clothes::all();

        return response()->json($Product, 200);
    }


    public function Get_n($nClothes)
    {
        $Clothes = Clothes::inRandomOrder()->limit($nClothes)->get();

        return response()->json($Clothes, 200);
    }

    public function Search_Name($Name_P)
    {
        $Clothes = Clothes::all()->where('name', '=', $Name_P);

        return response()->json($Clothes, 200);
    }





    //function web

    public function viewCatalogo()
    {
        // return view('public.catalogo');

        $url = "http://apirony.000webhostapp.com/api/GetAllClothes"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        // dd( $productos);

        $url = "http://apirony.000webhostapp.com/api/trademarks";

        $response = Http::get($url);

        $trademarks = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/typeclothes";

        $response = Http::get($url);

        $typeclothes = json_decode($response->getBody());

        return view('public.catalogo', compact('productos', 'trademarks', 'typeclothes'));
    }

    public function viewProducto($id)
    {
        // return view('public.catalogo');

        $url = "http://apirony.000webhostapp.com/api/Size/" . $id; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/trademarks";

        $response = Http::get($url);

        $trademarks = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/typeclothes";

        $response = Http::get($url);

        $typeclothes = json_decode($response->getBody());

        return view('public.producto', compact('productos', 'trademarks', 'typeclothes'));
    }

    public function filterType(Request $request)
    {
        // dd($request->filtro);

        // $filtro = $request->filtro;

        // dd($filtro);

        // return redirect()->route('catalogo.index')->with("filtro", $filtro);

        $url = "http://apirony.000webhostapp.com/api/GetAllClothes"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        // dd( $productos);

        $url = "http://apirony.000webhostapp.com/api/trademarks";

        $response = Http::get($url);

        $trademarks = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/typeclothes";

        $response = Http::get($url);

        $typeclothes = json_decode($response->getBody());

        $filtroType = $request->filtro;

        return view('public.catalogo', compact('productos', 'trademarks', 'typeclothes', 'filtroType'));
    }

    public function filterTrademark(Request $request)
    {
        // dd($request->filtro);

        // $filtro = $request->filtro;

        // dd($filtro);

        // return redirect()->route('catalogo.index')->with("filtro", $filtro);

        $url = "http://apirony.000webhostapp.com/api/GetAllClothes"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        // dd( $productos);

        $url = "http://apirony.000webhostapp.com/api/trademarks";

        $response = Http::get($url);

        $trademarks = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/typeclothes";

        $response = Http::get($url);

        $typeclothes = json_decode($response->getBody());

        $filtroTrade = $request->filtro;

        return view('public.catalogo', compact('productos', 'trademarks', 'typeclothes', 'filtroTrade'));
    }

    public function catalogo_hombre()
    {
        return redirect()->route("catalogo.index", ['mostrar' => "Hombre"]);
    }

    public function catalogo_mujer()
    {
        return redirect()->route("catalogo.index", ['mostrar' => "Mujer"]);
    }

    public function catalogo_nino()
    {
        return redirect()->route("catalogo.index", ['mostrar' => "Ni??os_y_Ni??as"]);
    }

    public function catalogo_accesorio()
    {
        return redirect()->route("catalogo.index", ['mostrar' => "Accesorio"]);
    }

    public function inicio(Request $request)
    {
        $url = "http://apirony.000webhostapp.com/api/GetAllClothes"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        // dd( $productos);

        $url = "http://apirony.000webhostapp.com/api/trademarks";

        $response = Http::get($url);

        $trademarks = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/typeclothes";

        $response = Http::get($url);

        $typeclothes = json_decode($response->getBody());

        if($request->inicio == "inicio"){
            return view('public.inicio', compact('productos', 'trademarks', 'typeclothes'));
        }else{
            return view('public.iniciootro', compact('productos', 'trademarks', 'typeclothes'));
        }

        
    }

    public function inicioempleado(Request $request)
    {
        $url = "http://apirony.000webhostapp.com/api/GetAllClothes"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        // dd( $productos);

        $url = "http://apirony.000webhostapp.com/api/trademarks";

        $response = Http::get($url);

        $trademarks = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/typeclothes";

        $response = Http::get($url);

        $typeclothes = json_decode($response->getBody());

        return view('public.inicioempleado', compact('productos', 'trademarks', 'typeclothes'));
      

        
    }

    //Para la vista privada
    public function boutique_index()
    {
        $url = "http://apirony.000webhostapp.com/api/GetAllClothes"; //con esto automaticamente crea la venta

        $response = Http::get($url);

        $productos = json_decode($response->getBody());

        // dd( $productos);

        $url = "http://apirony.000webhostapp.com/api/trademarks";

        $response = Http::get($url);

        $trademarks = json_decode($response->getBody());

        $url = "http://apirony.000webhostapp.com/api/typeclothes";

        $response = Http::get($url);

        $typeclothes = json_decode($response->getBody());

        return view('private.boutique', compact('productos', 'trademarks', 'typeclothes'));
    }

    public function boutique_store(Request $request)
    {
        $url = "http://apirony.000webhostapp.com/api/ClotheStore"; //con esto automaticamente crea la venta

        $img_url = $request->img->storeOnCloudinary('RonyBoutique');

        $response = Http::post(
            $url,
            [
                'trademark_id' => $request->trademark_id,
                'type_clothes_id' => $request->type_clothes_id,
                'type_costumer_clothe' => $request->type_costumer_clothe,
                'name' => $request->name,
                'size1' => $request->size1,
                'size2' => $request->size2,
                'size3' => $request->size3,
                'size4' => $request->size4,
                'size5' => $request->size5,
                'stock1' => $request->stock1,
                'stock2' => $request->stock2,
                'stock3' => $request->stock3,
                'stock4' => $request->stock4,
                'stock5' => $request->stock5,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
                'img' => $img_url->getPath(),
            ]
        );

        $productos = json_decode($response->getBody());

        session()->flash('message', "producto creado");

        return redirect()->route("tablero.boutique");

        // $result = $request->img->storeOnCloudinary('RonyBoutique');

        // dd($result->getPath());
    }
}
