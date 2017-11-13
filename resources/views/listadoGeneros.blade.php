@extends("masterPage")

@section("titulo")
  Listado de Géneros
@endsection

@section("principal")
  <h1>Mis Géneros</h1>
  <ul>
    @if (count($generos) > 0)
      @foreach($generos as $key => $genero)
        <li>
          <a href="/genero/{{$genero->id}}">
            {{$genero->name}}
          </a>
          <ul>
            @foreach ($genero->peliculas as $pelicula)
              {{$pelicula->title}}
            @endforeach
          </ul>
        </li>
      @endforeach
    @else
      <p>
        No hay géneros
      </p>
    @endif
  </ul>
@endsection
