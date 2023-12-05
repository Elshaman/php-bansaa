<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VariosModulo1Controller extends Controller
{
    public function principal(){
        if(Auth::check()){
            return view('principal');
        }else{
            return redirect('login/create')->with("mensaje", "Debe iniciar sesión");
        }

    }
}
