<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActoresController extends Controller
{
    public function listado() {
      $actores = Actor::all();

      return view("listadoActores", compact("actores"));
    }
}
