@extends("masterPage")

@section("titulo")
  Listado de Géneros
@endsection

@section("principal")
  <h1>Mi Carrito</h1>
  <ul>
    @forelse($carrito as $item)
      <li>
        {{$item->title}}
      </li>
    @empty
      <li>
        No hay items
      </li>
    @endforelse
  </ul>
@endsection
