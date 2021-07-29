<?php

use Illuminate\Support\Facades\DB;
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
    // return "view('welcome')";
});

Route::get('/about', 'HomeController@index');

Route::get('/articulo', function () {
    return view('articulo');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/sumar/{a}/{b}', 'HomeController@sumar');

Route::get('/nosotros', 'HomeController@nosotros');

Route::get('/foro', 'HomeController@foro');

Route::get('/guardar', function ()
{
    DB::insert('insert into articulos (nombre, precio, descripcion) values (?, ?, ?)', ['Ropa', '50.5', 'Barato case']);
});

Route::get('/leer', function ()
{
    $articulos = DB::select('select * from articulos');
    foreach ($articulos as $articulo) {
        echo 'Nombre: ' . $articulo->nombre . ' Precio: ' . $articulo->precio . 'bs <br>';
    }
});

Route::get('/actualizar', function ()
{
    DB::update('update articulos set precio = 500.90 where id = ?', ['1']);

});

Route::get('/eliminar/{id}', function ($id)
{
    DB::delete('delete from articulos where id = ?', [$id]);

});
