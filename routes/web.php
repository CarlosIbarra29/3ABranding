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
    return view('index');
});

Route::get('/welcome', function () {
    return 'welcome';
});

Route::get('/contacto/{nombre?}', function ($nombre = "3a Branding") {
    return view('contacto', array(
    			"nombre"=> $nombre
    ));
});


Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/impresiones', function () {
    return view('impresiones');
});

Route::get('/stands', function () {
    return view('stands');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/descripcion', function () {
    return view('descripcion');
});

Route::get('/productos','CategoriasController@index',
   function () {
    return view('productos');
}
);


//Route::get('/productos/{idProducto}','ProductosController@index')->name('productos');

