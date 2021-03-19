<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/somar', function () {
    return view('somar');
});

Route::get('/subtrair', function () {
    return view('subtrair');
});

Route::get('/multiplicar', function () {
    return view('multiplicar');
});

Route::get('/dividir', function () {
    return view('dividir');
});

Route::get('/laravel', function () {
    return view('welcome');
});

Route::post ('/resultadoSoma', '\App\Http\Controllers\CalculadoraController@resultadoSoma')->name('resultadoSoma');

Route::post ('/resultadoSubtracao', '\App\Http\Controllers\CalculadoraController@resultadoSubtracao')->name('resultadoSubtracao');

Route::post ('/resultadoDivisao', '\App\Http\Controllers\CalculadoraController@resultadoDivisao')->name('resultadoDivisao');

Route::post ('/resultadoMultiplicacao', '\App\Http\Controllers\CalculadoraController@resultadoMultiplicacao')->name('resultadoMultiplicacao');
