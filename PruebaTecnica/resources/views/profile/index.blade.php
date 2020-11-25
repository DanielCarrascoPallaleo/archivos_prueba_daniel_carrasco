@extends('layout.master');


@section('main')
    


<h1>Perfiles almacenados en la base de datos</h1>


<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Perfiles</h3></div>
    
<div class="row">
    <div class="col">

        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    
                    <th>rut empresa</th>
                    <th>giro</th>
                    
                    
                </tr>
                
            </thead>
            <tbody>
                @foreach ($profiles as $profile)                  
                <tr>                           
                    <td>{{$profile->rut}}</td>
                    <td>{{$profile->razon_social}}</td>
                    
                </tr>
                @endforeach
            </tbody>
            
          </table>
        </div>
    </div>
    
    
    <div class="col text-center border bg-dark">
      <a href="{{route('inicio')}}" class="btn"><h2 class="text-light">Volver</h2></a>
  </div>
@endsection