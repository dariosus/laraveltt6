<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pelicula;

class CarritoController extends Controller
{
    public function agregar(Request $request) {
      $id = $request["id"];

      $carrito = session("carrito");

      if (!$carrito) {
        $carrito = [];
      }

      $carrito[] = $id;

      session(["carrito" => $carrito]);

      return back();
    }

    public function quitar(Request $request) {
      $carrito = session("carrito");

      foreach ($carrito as $key => $item) {
        if ($item == $request["id"]) {
          unset($carrito[$key]);
        }
      }

      session(["carrito" => $carrito]);

      return back();
    }

    public function listar() {
      $carritoIds = session("carrito");

      if (!$carritoIds) {
        $carritoIds = [];
      }

      $carrito = Pelicula::find($carritoIds);

      return view("carrito", compact("carrito"));
    }
}
