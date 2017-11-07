@extends("masterPage")


@section("titulo")
  {{$peliFinal}}
@endsection

@section("principal")
  <h1>Detalle de peli</h1>
  <p>Eligiste {{$peliFinal}}</p>
@endsection
