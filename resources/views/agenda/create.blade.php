@extends('plantilla.plantilla')

@section('titulo','Crear Nuevo Registro')

@section('contenido')
<div class="container">
    <div class="card" style="width: auto; margin-top: 2em;">
        <div class="card-body">
            <h5 class="card-title">
                Formulario
            </h5>
            @if(session('mensaje'))
            <div class="alert alert-success alert-dismissible">
                <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
                    ×
                </button>
                <p>
                    <i class="icon fa fa-info">
                    </i>
                    {{ session('mensaje') }}
                </p>
            </div>
            @endif
            <form action="{{ route('agenda.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombres">
                            Nombres:
                        </label>
                        <input class="form-control" id="" name="nombres" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellidos">
                            Apellidos:
                        </label>
                        <input class="form-control" id="" name="apellidos" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="genero">
                            Genero:
                        </label>
                        <select class="form-control" id="" name="genero">
                            <option selected="">
                                Seleccione...
                            </option>
                            <option value="Mujer">
                                Mujer
                            </option>
                            <option value="Hombre">
                                Hombre
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email">
                            Email:
                        </label>
                        <input class="form-control" id="" name="email" type="email">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="celular">
                            Celular:
                        </label>
                        <input class="form-control" id="" name="celular" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telefono">
                            Telefono:
                        </label>
                        <input class="form-control" id="" name="telefono" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="departamento">
                            Departamento:
                        </label>
                        <input class="form-control" id="" name="departamento" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="posicion">
                            Posición:
                        </label>
                        <input class="form-control" id="" name="posicion" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="salario">
                            Salario:
                        </label>
                        <input class="form-control" id="" name="salario" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fechadenacimiento">
                            Fecha Nacimiento
                        </label>
                        <input class="form-control" id="" name="fechadenacimiento" type="date">
                        </input>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="direccion">
                            Dirección:
                        </label>
                        <input class="form-control" id="" name="direccion" type="text">
                        </input>
                    </div>
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-primary" type="submit">
                        Guardar
                    </button>
                    <a class="btn btn-danger" href="{{ route('cancelar') }}">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@include('plantilla.footer', ['container'=>'container-fluid' ])
@endsection
