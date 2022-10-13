<?php

use App\Http\Controllers\homeController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Faker\Core\Uuid;

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


//EJEMPLO DE RUTAS CON VARIABLES CON SISTEMA DE BLOG Y URL PROPIAS
// http://myblog.com/?id=340
// http://myblog.com/post/como-programar-laravel
//Opcion 1: Dos URL separadas
/*
Route::('/post', function(){
    $post = $this -> recuperarMiUltimoPost();
    //..
});

Route::get('/post/{slug}', function($slug){
    $post = $this -> recuperarMiPostMedianteSlug($slug);
    //..
});
*/
//Declarado una URL de tipo GET
//Opcion 2: Dos URL dentro de una sola
/*
Route::get('/post/{category}/{slug}', function($category, $slug = null) {

    $Categoria = $this->recuperarCategoria($category);

    if($slug == null)
       $post = $this->recuperarUltimoPost();
    else
       $post= $this->recuperarPostSlug($slug);
    return $post;
});

Route::match(['GET','POST'], '/category/{slug?}', function($slug = 'code=laravel'){

       $category= $this->recuperarPostSlug($slug);
    return $category;
});
*/



//VARIABLES DE RUTAS EN CONTROLADOR
/*
Route::get('/{category} / {uuid} ', function($category = 'a', $slug = 'post'){
    echo $category . '<br />' . $slug;
})->whereAlpha('category')->whereAlphaNumeric('slug')->whereUuid('uuid');
*/

/*
Route::get('/my-controller/{id}', [homeController::class, 'homeController']);
*/


//VARIABLES CON CADENA DE TEXTO
//Declarar diferentes condiciones para que cada una de las variables cumpla una condicion completa

/*
Route::get('/{category}/{slug}', function($category = 'a', $slug = 'post'){
    echo $category . '<br />' . $slug;
})-> where (
    'cadena', '[0-9]+'
);
*/

//Forma de poner condiciones dentro de las rutas para laravel
/*
Route::get('/{category}/{slug}', function($category = 'a', $slug = 'post'){
    echo $category . '<br />' . $slug;
})-> where (
    'catedory', '[0-9]+'
    )->where (
        'slug', '[\w-]+';
    );
*/

//Segunda opcion
/*
Route::get('/{category}/{slug}', function($category = 'a', $slug = 'post'){
    echo $category . '<br />' . $slug;
})-> where ([
    'catedory' => '[0-9]+',
    'slug' => '[\w-]+';
]);
*/

//Variables en las RUTAS introducciendo el metodo = Middleware
Route::get('/my-second-ruta', function(){
    echo "Hola";
    //return redirect()->route('myindex')
})->name('myindex');

Route::view('/my-routename-ex','routename');


//Para casos concretos de URL
/*
Route::get('/{category}/{slug}', function($category = 'a', $slug = 'post'){
    echo $category . '<br />' . $slug;
})-> whereAlpha ([
    ('catedory') -> whereAlphaNumeric
    ('slug') -> whereUuid('uuid');
]);
*/

Route::get('/my-ruta/{id}', [homeController::class, 'myRutaFunction']);

//Rutas del CRUD => GET, POST, UPDATE(PUT), DELETE
Route::view('/','home');
Route::get('/contact',[homeController::class,'contactPage']); //Enviar informacion
Route::post('/contact',[homeController::class,'processContact']); //Para pedir informacion nueva
Route::put('/contact', [homeController::class,'processContactPut']); //Definir o actualizar informacion
Route::patch('/contact',[homeController::class,'processContact']); //Definir o actualizar informacion
Route::delete('/contact', [homeController::class,'processContactDelete']);

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

