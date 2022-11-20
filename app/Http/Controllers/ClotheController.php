<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Clothes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClotheController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Clothes = DB::select('SELECT DISTINCT NAME,description,price FROM Clothes');

        return response()->json($Clothes,200);
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

        return response()->json(['Product'=>$Product,'mensaje'=>'Producto registrado'],201);
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

        return response()->json(['Product'=>$Product,'mensaje'=>'Producto Actualizad\o'],201);

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

        return response()->json($Product,200);
    }


    public function Get_n($nClothes)
    {
        $Clothes = Clothes::inRandomOrder()->limit($nClothes)->get();

        return response()->json($Clothes,200);
    }

    public function Search_Name($Name_P)
    {
        $Clothes = Clothes::all()->where('name','=',$Name_P);

        return response()->json($Clothes,200);
    }
}
