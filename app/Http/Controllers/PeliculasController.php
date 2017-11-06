<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listado() {
      $peliculas = [
        "Toy Story",
        "Toy Story 2",
        "Buscando a Nemo",
        "Ratatuil"
      ];

      $VAC = compact("peliculas");

      return view("listadoPeliculas", $VAC);
    }

    public function detalle($id) {
      $peliculas = [
        "Toy Story",
        "Toy Story 2",
        "Buscando a Nemo",
        "Ratatuil"
      ];

      $peliFinal = $peliculas[$id];

      $VAC = compact("peliFinal");

      return view("detallePelicula",$VAC);
    }
}
