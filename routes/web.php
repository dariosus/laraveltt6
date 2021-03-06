<?php

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

Route::get("/buscador", "PeliculasController@buscar");

Route::post("/agregarACarrito", "CarritoController@agregar");
Route::post("/quitarCarrito", "CarritoController@quitar");
Route::get("/carrito", "CarritoController@listar");

Route::get("/registrarAdmin", "MiRegisterController@add")->middleware("admin");
Route::post("/registrarAdmin", "MiRegisterController@store")->middleware("admin");

Route::get("/api/peliculas", "ApiController@peliculas");
Route::get("/api/peliculas/{id}", "ApiController@detallePeli");

Route::patch("/editarPelicula", "PeliculasController@actualizar");

Route::get("/editarPelicula/{id}", "PeliculasController@editar");

Route::get("/borrarPelicula/{id}", "PeliculasController@borrar");

Route::get("/agregarPelicula", "PeliculasController@agregar")->middleware("auth")->middleware("saludar");

Route::post("/agregarPelicula", "PeliculasController@guardar")->middleware("auth");

Route::get("/actores", "ActoresController@listado");

Route::get("/peliculas", "PeliculasController@listado")->middleware("saludar");

Route::get("/pelicula/{id}", "PeliculasController@detalle")->middleware("saludar");

Route::get("/generos", "GenerosController@listado");

Route::get("/pelisBuenRating", "PeliculasController@rating");

Route::get("/saludar/{nombre}/{apellido}", function($nombre, $apellido) {
  echo "Hola $nombre $apellido";
});

Route::get("/bienvenidos", function() {
  echo "Bienvenidos a mi sitio";
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
