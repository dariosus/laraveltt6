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

Route::get("/agregarPelicula", "PeliculasController@agregar");

Route::post("/agregarPelicula", "PeliculasController@guardar");

Route::get("/actores", "ActoresController@listado");

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/pelicula/{id}", "PeliculasController@detalle");

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
