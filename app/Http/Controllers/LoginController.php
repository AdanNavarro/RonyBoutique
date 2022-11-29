<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{

    // funcion para iniciar sesion
    public function cliente()
    {
        return redirect()->route("inicio");
    }

    public function logout(){
        return redirect()->route("inicio");
    }
}
