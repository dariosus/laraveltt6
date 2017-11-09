<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;

class PeliculasController extends Controller
{
    public function agregar() {
      $generos = Genero::all();

      $VAC = compact("generos");

      return view("agregarPelicula", $VAC);
    }

    public function listado() {
      $peliculas = Pelicula::all();

      $VAC = compact("peliculas");

      return view("listadoPeliculas", $VAC);
    }

    public function detalle($id) {
      $peliFinal = Pelicula::find($id);

      $VAC = compact("peliFinal");

      return view("detallePelicula",$VAC);
    }

    public function rating() {
      $peliculas = Pelicula::where("rating", ">", 9)
        ->orderBy("title", "DESC")
        ->take(3)
        ->get();

      $VAC = compact("peliculas");

      return view("listadoPeliculas", $VAC);
    }

    public function guardar(Request $request) {

      $reglas = [
          "titulo" => "required|string|unique:movies,title",
          "premios" => "required|integer|min:0",
          "rating" =>  "required|numeric|min:0|max:10",
          "fecha_de_estreno" => "required|date",
          "duracion" => "required|integer|min:0"
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "min" => "El campo :attribute tiene un mínimo de :min"
      ];

      $this->validate($request, $reglas, $mensajes);

      return redirect("/peliculas");
    }
}
