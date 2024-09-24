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
    public function mostrarExerc5(){
        return view("exerc5");
    }
    public function mostrarExerc6(){
        return view("exerc6");
    }
    public function mostrarExerc7(){
        return view("exerc7");
    }
    public function mostrarExerc8(){
        return view("exerc8");
    }
    public function mostrarExerc9(){
        return view("exerc9");
    }
    public function mostrarExerc10(){
        return view("exerc10");
    }
    public function mostrarExerc11(){
        return view("exerc11");
    }
    public function mostrarExerc12(){
        return view("exerc12");
    }
    public function mostrarExerc13(){
        return view("exerc13");
    }
    public function mostrarExerc14(){
        return view("exerc14");
    }
    public function mostrarExerc15(){
        return view("exerc15");
    }
    public function mostrarExerc16(){
        return view("exerc16");
    }
    public function mostrarExerc17(){
        return view("exerc17");
    }
    public function mostrarExerc18(){
        return view("exerc18");
    }
    public function mostrarExerc19(){
        return view("exerc19");
    }
    public function mostrarExerc20(){
        return view("exerc20");
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
        $valor2 = (int)$request->input('valor2') == 0 ? 1 : (int)$request->input('valor2') ; 
        return $valor1/$valor2;
    }

    public function calcularExerc5(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $valor3 = (int)$request->input('valor3');
        return ($valor1 + $valor2 + $valor3)/3;
    }

    public function calcularExerc6(Request $request){
        $valor1 = (int)$request->input('valor1');
        return ((9 * $valor1) / 5) + 32;
    }

    public function calcularExerc7(Request $request){
        $valor1 = (int)$request->input('valor1');
        return (($valor1 - 32) / 9) * 5;
    }

    public function calcularExerc8(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1 * $valor2;
    }

    public function calcularExerc9(Request $request){
        $valor1 = (int)$request->input('valor1');
        return (pow($valor1,2)) * 3.14;
    }

    public function calcularExerc10(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return 2*$valor1 + 2*$valor2;
    }

    public function calcularExerc11(Request $request){
        $valor1 = (int)$request->input('valor1');
        return 2*3.14*$valor1;
    }

    public function calcularExerc12(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return pow($valor1,$valor2);
    }

    public function calcularExerc13(Request $request){
        $valor1 = (int)$request->input('valor1');
        return $valor1*100;
    }

    public function calcularExerc14(Request $request){
        $valor1 = (int)$request->input('valor1');
        return $valor1*0.62;
    }

    public function calcularExerc15(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1/pow($valor2,2);
    }

    public function calcularExerc16(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1 - ($valor1*$valor2)/100;
    }

    public function calcularExerc17(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $valor3 = (int)$request->input('valor3');
        return $valor1 * ($valor2/100) * $valor3;
    }

    public function calcularExerc18(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        $valor3 = (int)$request->input('valor3');
        return $valor1 * (1+($valor2/100))**$valor3;
    }

    public function calcularExerc19(Request $request){
        $valor1 = (int)$request->input('valor1');
        $hora = $valor1 * 24;
        $min = $valor1 * 24 * 60 ;
        $seg = $valor1 *24 *60 *60;
        return "Hora: ".$hora."Minuto: ".$min."Segundos: ".$seg;
    }

    public function calcularExerc20(Request $request){
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1 / $valor2;
    }



}
