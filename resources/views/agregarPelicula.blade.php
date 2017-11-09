@extends("masterPage")

@section("titulo")
  Agregar película
@endsection

@section("principal")
  <h1>Agrega Película</h1>
  @if (count($errors) > 0)
    		<div class="alert alert-danger">
        		<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
    		   </ul>
	    </div>
	@endif

  <form class="" action="/agregarPelicula" method="post">
    <!-- IMPORTANTE - Capa de seguridad de Laravel !-->
    {{ csrf_field() }}
    <!-- FIN IMPORTANTE !-->
    <div class="form-group">
      <label for="">Titulo</label>
      <input class="form-control" type="text" name="titulo" value="{{old("titulo")}}">
    </div>
    <div class="form-group">
      <label for="">Rating</label>
      <input class="form-control" type="text" name="rating" value="{{old("rating")}}">
    </div>
    <div class="form-group">
      <label for="">Premios</label>
      <input class="form-control" type="text" name="premios" value="{{old("premios")}}">
    </div>
    <div class="form-group">
      <label for="">Duración</label>
      <input class="form-control" type="text" name="duracion" value="{{old("duracion")}}">
    </div>
    <div class="form-group">
      <label for="">Fecha de estreno</label>
      <input class="form-control" type="date" name="fecha_de_estreno" value="{{old("fecha_de_estreno")}}">
    </div>
    <div class="form-group">
      <label for="">Genero</label>
      <select class="form-control" name="genero">
        @foreach($generos as $genero)
          @if ($genero->id == old("genero"))
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
