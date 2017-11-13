<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = "movies";
    //protected $primaryKey = "idPelicula";
    //protected $timestamps = false;

    protected $guarded = [];

    public function getReleaseDate() {
      if ($this->release_date) {


        $splits = explode(" ", $this->release_date);
        return $splits[0];
      }

    }

    public function genero() {
      return $this->belongsTo(Genero::class, "genre_id");
    }

    public function actores() {
      return $this->belongsToMany(Actor::class, "actor_movie", "movie_id", "actor_id");
    }
}
