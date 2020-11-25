@extends('layout.master');

@section('main')


  
    {{--<form class="form-inline" action="{{route('profiles.index')}}" method="GET">--}}
    {{--{{route('profiles.index')}}--}}
    {{--action="ProfileController.php"--}}
    <h1>SII</h1>
    <h2>Ingrese el rut a consultar al API de SII</h2>
      <h3>Rut probados : 12.486.864-5  /  76.118.195-5  </h3>

    <form class="form-inline" action="{{route('consultas.index')}}" method="GET">
    <div class="form-group mx-sm-3 mb-2">
      
      <input type="text" name="rutingresar" class="form-control" placeholder="11.111.111-0">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Hacer consulta</button>
    </form>

  <div class="col text-center border bg-dark">
    <a href="{{route('activities.index')}}" class="btn"><h2 class="text-light">Ver actividades</h2></a>
    </div>

    <div class="col text-center border bg-dark">
      <a href="{{route('profiles.index')}}" class="btn"><h2 class="text-light">Ver perfiles</h2></a>
   </div>

@endsection