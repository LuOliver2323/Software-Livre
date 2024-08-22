<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    //Exercício 01
    public function mostrarFormulario1(){
        return view("exerc1");
    }

    public function calcularFormulario1(Request $request){
        $valor1 = $request->input("valor1");
        $valor2 = $request->input("valor2");
        $resultado = $valor1 + $valor2;
        return view("exerc1resp", compact('resultado'));
    }

    //Exercicio 02
    public function mostrarFormulario2(){
        return view("exerc2");
    }

    public function calcularFormulario2(Request $request){
        $valor1 = $request->input("valor1");
        $valor2 = $request->input("valor2");
        $resultado = $valor1 - $valor2;
        return view("exerc2resp", compact('resultado'));
    }

    //Exercicio 03
    public function mostrarFormulario3(){
        return view("exerc3");
    }

    public function calcularFormulario3(Request $request){
        $valor1 = $request->input("valor1");
        $valor2 = $request->input("valor2");
        $resultado = $valor1 * $valor2;
        return view("exerc3resp", compact('resultado'));
    }

    //Exercício 04
    public function mostrarFormulario4(){
        return view("exerc4");
    }

    public function calcularFormulario4(Request $request){
        $valor1 = $request->input("valor1");
        $valor2 = $request->input("valor2");

        if ($valor1 == 0) {
            return ('Erro: Não é possível dividir por zero.');
        }
        else if ($valor2 == 0) {
            return ('Erro: Não é possível dividir por zero.');
        }

        $resultado = $valor1 / $valor2;
        return view("exerc4resp", compact('resultado'));
    }

    //Exercicio 05
    public function mostrarFormulario5(){
        return view("exerc5");
    }

    public function calcularFormulario5(Request $request){
        $valor1 = $request->input("valor1");
        $valor2 = $request->input("valor2");
        $valor3 = $request->input("valor3");

        $resultado = ($valor1 + $valor2 + $valor3) / 3;
        return view("exerc5resp", compact('resultado'));
    }

    //Exercicio 06
    public function mostrarFormulario6(){
        return view("exerc6");
    }

    public function calcularFormulario6(Request $request){

        $celsius = $request->input('celsius');
        $fahrenheit = ($celsius * 9/5) + 32;

        return view("exerc6resp", compact('celsius', 'fahrenheit'));
    }

    //Exercicio 07
    public function mostrarFormulario7(){
        return view("exerc7");
    }

    public function calcularFormulario7(Request $request){

        $fahrenheit = $request->input('fahrenheit');
        $celsius = ($fahrenheit - 32) * 5/9;

        return view("exerc7resp", compact('fahrenheit', 'celsius'));
    }

    //Exercicio 08
    public function mostrarFormulario8(){
        return view("exerc8");
    }

    public function calcularFormulario8(Request $request){
        $largura = $request->input("largura");
        $altura = $request->input("altura");

        $resultado = $largura * $altura;
        return view("exerc8resp", compact('resultado'));
    }

    //Exercício 09
    public function mostrarFormulario9(){
        return view("exerc9");
    }

    public function calcularFormulario9(Request $request){

        $raio = $request->input('raio');
        $pi = pi();

        $resultado = $pi * pow($raio, 2);
        return view("exerc9resp", compact('resultado'));
    }

    //Exercício 10
    public function mostrarFormulario10(){
        return view("exerc10");
    }

    public function calcularFormulario10(Request $request){
        $largura = $request->input("largura");
        $altura = $request->input("altura");

        $perimetro = 2 * ($largura + $altura);
        return view("exerc10resp", compact('perimetro'));
    }

    //Exercicio 11
    public function mostrarFormulario11(){
        return view("exerc11");
    }

    public function calcularFormulario11(Request $request){

        $raio = $request->input('raio');
        $pi = pi();
        $perimetro = 2 * $pi * $raio;

        return view("exerc11resp", compact('perimetro'));
    }

    //Exercicio 12
    public function mostrarFormulario12(){
        return view("exerc12");
    }

    public function calcularFormulario12(Request $request){

        $base = $request->input("base");
        $expoente = $request->input("expoente");

        $resultado = pow($base, $expoente);
        return view("exerc12resp", compact('resultado', 'base', 'expoente'));
    }

    //Exercicio 13
    public function mostrarFormulario13(){
        return view("exerc13");
    }

    public function calcularFormulario13(Request $request){

        $metros = $request->input('metros');

        $centimetros = $metros * 100;
        return view("exerc13resp", compact('metros', 'centimetros'));
    }
}
