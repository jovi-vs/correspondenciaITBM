@extends('layouts.app')

@section('contenido')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Unidades</h4>
                    <a href="{{ route('unidad.create') }}">
                        <button type="button" class="btn btn-outline-success btn-fw">ADICIONAR</button>
                    </a>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>descripcion de unidad</th>
                                    <th>ubicacion</th>
                                    <th>acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($unidades as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>{{$item->ubicacion}}</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <a href="{{route('unidad.edit',$item)}}" class="btn btn-outline-primary btn-icon-text">
                                                <i class="mdi mdi-file-check btn-icon-append"></i>
                                            </a>&nbsp;&nbsp;
                                            {{-- boton eliminar --}}
                                            <form action="{{ route('unidad.destroy', $item) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-icon-text">
                                                    <i class="mdi mdi-delete-forever btn-icon-prepend"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection