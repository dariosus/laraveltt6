@extends("masterPage")


@section("titulo")
  {{$peliFinal->title}}
@endsection

@section("principal")
  <h1>Detalle de peli</h1>
  <p>Eligiste {{$peliFinal->title}}</p>
  <p>Premios: {{$peliFinal->awards}}</p>
  <p>Fecha de estreno: {{$peliFinal->release_date}}</p>
  <p>Genero: {{$peliFinal->genero->name}}</p>
  <img src="{{$peliFinal->rutaPoster()}}" alt="">
  <p>Actores:
    <ul>
      @foreach($peliFinal->actores as $actor)
        <li>
          {{$actor->getNombreCompleto()}}
        </li>
      @endforeach
    </ul>
  </p>
  <a href="/borrarPelicula/{{$peliFinal->id}}">
    <button type="button" name="button" class="btn btn-danger">Borrar</button>
  </a>
  <a href="/editarPelicula/{{$peliFinal->id}}">
    <button type="button" name="button" class="btn btn-warning">Editar</button>
  </a>
  @if ($enCarrito)
    <form class="" action="/quitarCarrito" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$peliFinal->id}}">
      <input type="submit" name="" value="Quitar del carrito" class="btn btn-warning">
    </form>
  @else
    <form class="" action="/agregarACarrito" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$peliFinal->id}}">
      <input type="submit" name="" value="Agregar a carrito" class="btn btn-success">
    </form>
  @endif
@endsection
