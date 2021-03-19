<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function resultadoSoma(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 + $valor2;
        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
    public function resultadoSubtracao(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 - $valor2;
        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
    public function resultadoDivisao(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 / $valor2;
        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
    public function resultadoMultiplicacao(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $resultado = $valor1 * $valor2;
        return view('resultado', compact('valor1', 'valor2', 'resultado'));
    }
}
