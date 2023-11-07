@extends('layouts.app')

@section('contenido')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">AGREGAR UNIDAD</h4>
            <p class="card-description"> Agregue unidades existentes en el instituto </p>
            <form class="forms-sample" method="POST" action="{{url('unidad')}}">
                @csrf
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-3 col-form-label">Descripcion</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="descripcion" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-3 col-form-label">Ubicacion</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="ubicacion" >
                    </div>
                </div> 
              <button type="submit" class="btn btn-primary mr-2">Guardar</button>
              {{-- <button class="btn btn-dark">Cancelar</button> --}}
            </form>
          </div>
        </div>
      </div>
@endsection
