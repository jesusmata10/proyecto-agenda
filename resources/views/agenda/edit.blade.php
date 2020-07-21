@extends('plantilla.plantilla')

@section('titulo','Editar Registro')

@section('contenido')
<div class="container">
    <div class="card" style="width: auto; margin-top: 2em;">
        <div class="card-body">
            <h5 class="card-title">
                Editar Registro
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
            <form action="{{ route('agenda.update', $agenda->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombres">
                            Nombres:
                        </label>
                        <input class="form-control" id="" name="nombres" type="text" value="{{ $agenda->nombres }}">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellidos">
                            Apellidos:
                        </label>
                        <input class="form-control" id="" name="apellidos" type="text" value="{{ $agenda->apellidos }}">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="genero">
                            Genero:
                        </label>
                        <select class="form-control" name="genero">
                        	<option value="Hombre" @if($agenda->genero=='Hombre')Selected @endif>Hombre</option>
                        	<option value="Mujer" @if($agenda->genero=='Mujer')Selected @endif>Mujer</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email">
                            Email:
                        </label>
                        <input class="form-control" id="" name="email" type="email" value="{{ $agenda->email }}">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="celular">
                            Celular:
                        </label>
                        <input class="form-control" id="" name="celular" type="text" value="{{ $agenda->celular }}">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telefono">
                            Telefono:
                        </label>
                        <input class="form-control" id="" name="telefono" type="text" value="{{ $agenda->telefono }}">
                        </input>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="departamento">
                            Departamento:
                        </label>
                        <input class="form-control" id="" name="departamento" type="text" value="{{ $agenda->departamento }}">
                        </input>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="posicion">
                            Posición:
                        </label>
                        <input class="form-control" id="" name="posicion" type="text" value="{{ $agenda->posicion }}">
                        </input>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="salario">
                            Salario:
                        </label>
                        <input class="form-control" id="" name="salario" type="text" value="{{ $agenda->salario }}">
                        </input>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fechadenacimiento">
                            Fecha Nacimiento
                        </label>
                        <input class="form-control" id="" name="fechadenacimiento" type="date" value="{{ $agenda->fechadenacimiento }}">
                        </input>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="direccion">
                            Dirección:
                        </label>
                        <input class="form-control" id="" name="direccion" type="text" value="{{ $agenda->direccion }}">
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
    @include('plantilla.footer', ['container'=>'container-fluid' ])
@endsection
</div>