<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;
use Auth;

class PeliculasController extends Controller
{
    public function borrar($id) {
      $pelicula = Pelicula::find($id);

      //$pelicula->title = "Sarsasa";
      //$pelicula->save();

      $pelicula->delete();

      return redirect("/peliculas");
    }

    public function agregar() {
      if (Auth::check() == false) {
        return redirect("/peliculas");
      }

      $generos = Genero::all();

      $VAC = compact("generos");

      return view("agregarPelicula", $VAC);
    }

    public function listado() {
      $peliculas = Pelicula::paginate(5);
      $usuario = Auth::user();

      $VAC = compact("peliculas", "usuario");

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
        ->paginate(2);

      $VAC = compact("peliculas");

      return view("listadoPeliculas", $VAC);
    }

    public function guardar(Request $request) {

      $reglas = [
          "titulo" => "required|string|unique:movies,title",
          "premios" => "required|integer|min:0",
          "rating" =>  "required|numeric|min:0|max:10",
          "fecha_de_estreno" => "required|date",
          "duracion" => "required|integer|min:0",
      ];

      $mensajes = [
        "required" => "El campo :attribute es requerido",
        "min" => "El campo :attribute tiene un mínimo de :min"
      ];

      $this->validate($request, $reglas, $mensajes);

      $poster = $request->file("poster");

      $nombrePoster = $poster->storePublicly("public/posters");

      $pelicula = new Pelicula();

      $pelicula->title = $request["titulo"];
      $pelicula->awards = $request["premios"];
      $pelicula->length = $request["duracion"];
      $pelicula->release_date =$request["fecha_de_estreno"];
      $pelicula->rating = $request["rating"];
      $pelicula->genre_id = $request["genero"];
      $pelicula->poster = $nombrePoster;

      $pelicula->save();

      /*
      Pelicula::create([
        "titulo" => $request["titulo"],
        "awards" => $request["premios"]
        ...
      ]);
      */

      //Pelicula::create($request->all());

      return redirect("/peliculas");
    }

    public function editar($id){
      $pelicula = Pelicula::find($id);

      $generos = Genero::all();

      $VAC = compact("pelicula", "generos");

      return view("editarPelicula", $VAC);

    }

    public function actualizar(Request $request){
      $reglas = [
          "titulo" => "required|string",
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

      $pelicula = Pelicula::find($request["id"]);

      $pelicula->title = $request["titulo"];
      $pelicula->awards = $request["premios"];
      $pelicula->length = $request["duracion"];
      $pelicula->release_date =$request["fecha_de_estreno"];
      $pelicula->rating = $request["rating"];
      $pelicula->genre_id = $request["genero"];

      $pelicula->save();

      return redirect("/pelicula/" . $request["id"]);
    }
}
