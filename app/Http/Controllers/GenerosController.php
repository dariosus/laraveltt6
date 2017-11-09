<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GenerosController extends Controller
{
  public function listado() {
    $generos = Genero::all();

    $VAC = compact("generos");

  return view("listadoGeneros", $VAC);
  }
}
