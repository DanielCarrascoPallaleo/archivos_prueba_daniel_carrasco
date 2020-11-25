@extends('layout.master');

@section('main')
<h1>Actividades almacenadas en la base de datos</h1>


<div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Actividades </h3></div>
    
<div class="row">
    <div class="col">

        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    
                    <th>rut empresa</th>
                    <th>giro</th>
                    <th>codigo</th>
                    <th>categoria</th>
                    <th>afecta</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                  
                <tr>        
                    <td>
                        @if(isset($activity->profiles_rut))
                          {{$activity->profiles_rut}}
                        @else
                        sin rut 
                        @endif
                    </td>
                    <td>{{$activity->giro}}</td>
                    <td>{{$activity->codigo}}</td>
                    <td>{{$activity->categoria}}</td>
                    <td>
                        @if(($activity->afecta==1))
                        si
                      @else
                      no
                      @endif
                    </td>
                    <td class="text-center">
                    
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
            
          </table>
        </div>
    </div>
</div>




<div class="col text-center border bg-dark">
    <a href="{{route('inicio')}}" class="btn"><h2 class="text-light">Volver</h2></a>
</div>
@endsection