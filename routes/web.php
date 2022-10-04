<?php

use App\Http\Controllers\homeController;
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


//Rutas del CRUD => GET, POST, UPDATE(PUT), DELETE
/*
Route::get('/contact',[homeController::class,'contactPage']); //Enviar informacion
Route::post('/contact-post',[homeController::class,'processContact']); //Para pedir informacion nueva
Route::put('/contact', [homeController::class,'processContactPut']); //Definir o actualizar informacion
Route::patch('/contact',[homeController::class,'processContact']); //Definir o actualizar informacion
Route::delete('/contact', [homeController::class,'processContactDelete']);
*/

//OTRAS RUTAS
/*
Route::head('/contact',[homeController::class,'processContact']);
Route::options('/contact',[homeController::class,'processContact']);
*/

//RUTAS ESPECIALES
/*
Route::match(['GETM', 'POST'],'/uri',[homeController::class, 'matchedFunction']);
Route::any('/example',[homeController::class, 'anyFunction']);
Route::redirect('/routes1', 'routes2'); // 302
Route::permanentRedirect('/route1', 'route2'); // 301
*/


/*Route::get('/{cadena}', function ($cadena = null) {

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
*/

Route::view('/','home');

Route::get('/example',[ homeController::class,'index' ]);
