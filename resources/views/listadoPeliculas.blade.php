@extends("masterPage")

@section("titulo")
  Listado de películas
@endsection

@section("principal")
  <h1>Mis películas</h1>
  <ul>
    @forelse($peliculas as $key => $pelicula)
      <li>
        <a href="/pelicula/{{$key}}">
          {{$pelicula}}
        </a>
      </li>
    @empty
      <p>
        No hay películas
      </p>
    @endforelse
  </ul>
@endsection
