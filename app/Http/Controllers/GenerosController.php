<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;

class GenerosController extends Controller
{
  public function listado() {
    $generos = Genero::all();

    dd($generos);

    $VAC = compact("generos");

  return view("listadoGeneros", $VAC);
  }
}
