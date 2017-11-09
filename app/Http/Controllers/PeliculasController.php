<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculasController extends Controller
{
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
}
