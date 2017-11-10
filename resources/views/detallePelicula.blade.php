@extends("masterPage")


@section("titulo")
  {{$peliFinal->title}}
@endsection

@section("principal")
  <h1>Detalle de peli</h1>
  <p>Eligiste {{$peliFinal->title}}</p>
  <p>Premios: {{$peliFinal->awards}}</p>
  <p>Fecha de estreno: {{$peliFinal->release_date}}</p>
  <a href="/borrarPelicula/{{$peliFinal->id}}">
    <button type="button" name="button" class="btn btn-danger">Borrar</button>
  </a>
@endsection
