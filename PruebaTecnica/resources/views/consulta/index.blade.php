@extends('layout.master')


@section('main')
    <h1>SII (si desea editar antes de guardar en la base de datos, escriba sobre los campos del formulario)</h1>
    <br>
<br>

<h5>observación; primero se hace click en "ingresar el perfil", 
  despues hay que volver a entrar con el mismo rut para 
  guardar las actividades asociadas al rut haciendo click en "ingresar actividades"</h5>

    

{{--prueba formulario--}}
<h2>Datos de la empresa</h2>
<form method="POST" action="{{route('profiles.store')}}">
  @csrf
  <div class="form-group">
    <label for="inputRut">Rut</label>
    <input type="text" name="rut" class="form-control" id="inputRut" value="{{ $rut['rut'] }}">
    
  </div>
  <div class="form-group">
    <label for="inputRazonSocial">Razon social</label>
    <input type="text" name="razon_social" class="form-control" id="inputRazonSocial" value="{{ $rut['razon_social'] }}">
    
  </div>
  <button type="submit" class="btn btn-primary">Ingresar el perfil a la Base de datos</button>

</form>


{{--formulario para actividades--}}
  <form method="POST" action="{{route('activities.store')}}">
    @csrf
  <div class="form-group">
    <h3>Actividades asociadas al rut:</h3>
    <input type="text" name="rut" class="form-control" id="inputRut" value="{{ $rut['rut'] }}">


    @foreach ($rut['actividades'] as $item  )
          <br>
          <input type="text" name="giro" class="form-control" id="inputActividadGiro" value="{{$item['giro']}}">
          <input type="text" name="codigo" class="form-control" id="inputActividadCodigo" value="{{$item['codigo']}}">
          <input type="text" name="categoria" class="form-control" id="inputActividadCategoria" value="{{$item['categoria']}}">
          @if(($item['afecta']==1))
              <input type="text" name="afecta" class="form-control" id="inputActividadAfecta" value="1">
              @else
              <input type="text" name="afecta" class="form-control" id="inputActividadAfecta" value="0">
          @endif
    @endforeach
 
  </div>
  
  
  <button type="submit" class="btn btn-primary">Ingresar actividades a Base de datos</button>
</form>

    
  
  {{-- fin prueba formulario--}}
    <div class="col text-center border bg-dark">
      <a href="{{route('inicio')}}" class="btn"><h2 class="text-light">Volver</h2></a>
  </div>
@endsection