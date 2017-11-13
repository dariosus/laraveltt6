<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = "genres";
    protected $guarded = [];

    public function peliculas() {
      return $this->hasMany(Pelicula::class, "genre_id");
    }
}
