<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listaController extends Controller
{
    public function mostrarExerc1(){
        return view("exerc1");
    }
    public function mostrarExerc2(){
        return view("exerc2");
    }
    public function mostrarExerc3(){
        return view("exerc3");
    }
    public function mostrarExerc4(){
        return view("exerc4");
    }
    public function calcularExerc1(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }
    public function calcularExerc2(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1-$valor2;
    }
    
    public function calcularExerc3(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1*$valor2;
    }

    public function calcularExerc4(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $valor2 != 0;
        return $valor1/$valor2;
    }

}
