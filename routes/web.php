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

Route::view('/', 'pagina');


Route::get('/{cadena}', function ($cadena = null) {

    $resultado = 'No conocido';

    switch($cadena) {
        case 'hola-mundo':
            $resultado = 'Hola usuario';
            break;
        case 'hola-laravel':
            $resultado = 'Hola! estudiante de laravel';
            break;
        default:
        $resultado = 'Perdona, no entiendo tu saludo';
        break;
    }

    return view('welcome', [
       'cadena' => $resultado
    ]);
});
