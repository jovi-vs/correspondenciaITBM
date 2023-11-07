@extends('layouts.app')

@section('contenido')
<body>
 {{-- <form method="POST" action="{{route('unidad.update',$unidad)}}"> --}}

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Modificar Unidad</h4>
                <p class="card-description"> Horizontal form layout </p>
                <form class="forms-sample" method="POST" action="{{route('unidad.update',$unidad)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Descripcion</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="descripcion" value="{{$unidad->descripcion}}">
                        </div>
                      </div>
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">lugar</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="ubicacion" value="{{$unidad->ubicacion}}">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                  <button class="btn btn-dark">Cancelar</button>
                </form>
              </div>
            </div>
          </div>
          @endsection