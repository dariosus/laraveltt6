<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class ApiController extends Controller
{
    public function peliculas() {
      $peliculas = Pelicula::all();

      return $peliculas;
    }

    public function detallePeli($id) {
      
      //$pelicula = Pelicula::with("actores")->where("id", "=", $id)->first();
      $pelicula = Pelicula::find($id);
      $pelicula->actores;

      return $pelicula;
    }
}
