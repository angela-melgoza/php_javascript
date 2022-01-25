<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request, $name='Anonimo', $edad=18){
        $mensaje =' ';
        if($edad<18){
            $mensaje = 'Eres menor de edad';
        }else{
            $mensaje = 'Eres mayor de edad';
        }

        return view('hola',compact('name','mensaje'));
    }
}
