<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
  public function listado() {
    $generos = [
      "Terror",
      "Drama",
      "Comedia",
      "Accion"
    ];

    $VAC = compact("generos");

    return view("listadoGeneros", $VAC);
  }
}
