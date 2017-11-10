@extends("masterPage")

@section("titulo")
  Editar película: {{$pelicula->title}}
@endsection

@section("principal")
  <h1>Editar Película: {{$pelicula->title}}</h1>
  @if (count($errors) > 0)
    		<div class="alert alert-danger">
        		<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
    		   </ul>
	    </div>
	@endif

  <form class="" action="/editarPelicula" method="post">
    <!-- IMPORTANTE - Capa de seguridad de Laravel !-->
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
    <!-- FIN IMPORTANTE !-->
    <div class="form-group">
      <label for="">Titulo</label>
      <input class="form-control" type="text" name="titulo" value="{{$pelicula->title}}">
    </div>
    <div class="form-group">
      <label for="">Rating</label>
      <input class="form-control" type="text" name="rating" value="{{$pelicula->rating}}">
    </div>
    <div class="form-group">
      <label for="">Premios</label>
      <input class="form-control" type="text" name="premios" value="{{$pelicula->premios}}">
    </div>
    <div class="form-group">
      <label for="">Duración</label>
      <input class="form-control" type="text" name="duracion" value="{{$pelicula->length}}">
    </div>
    <div class="form-group">
      <label for="">Fecha de estreno</label>
      <input class="form-control" type="date" name="fecha_de_estreno" value="{{$pelicula->getReleaseDate()}}">
    </div>
    <input type="hidden" name="id" value="{{$pelicula->id}}">
    <div class="form-group">
      <label for="">Genero</label>
      <select class="form-control" name="genero">
        @foreach($generos as $genero)
          @if ($genero->id == $pelicula->genre_id)
            <option value="{{$genero->id}}" selected>
              {{$genero->name}}
            </option>
          @else
            <option value="{{$genero->id}}">
              {{$genero->name}}
            </option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <input type="submit" value="Agregar película" class="btn btn-primary">
    </div>
  </form>
@endsection
