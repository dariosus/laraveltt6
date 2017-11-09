@extends("masterPage")

@section("titulo")
  Listado de Géneros
@endsection

@section("principal")
  <h1>Mis Actores</h1>
  <ul>
    @if (count($actores) > 0)
      @foreach($actores as $key => $actor)
        <li>
          <a href="/actor/{{$actor->id}}">
            {{$actor->getNombreCompleto()}}
          </a>
        </li>
      @endforeach
    @else
      <p>
        No hay géneros
      </p>
    @endif
  </ul>
@endsection
