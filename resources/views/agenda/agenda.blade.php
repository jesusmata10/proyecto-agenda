@extends('plantilla.plantilla')

@section('Tilulo','Agenda')

@section('contenido')
<div class="container">
    <div class="card" style="width: auto; margin-top: 2em;">
        <div class="card-body">
            @if(session('c'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button aria-hidden="true" class="close" data-dismiss="alert" type="button">
                    ×
                </button>
                <p>
                    <i class="icon fa fa-info">
                    </i>
                    {{ session('c') }}
                </p>
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title">
                        Tabla
                    </h5>
                </div>
                <div class=" col-6 ">
                    <a class="btn btn-primary float-right" href="{{ route('agenda.create')}}">
                        Crear Registro Nuevo
                    </a>
                </div>
            </div>
            <br>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">
                                #
                            </th>
                            <th scope="col">
                                Nombres y Apellidos
                            </th>
                            <th scope="col">
                                telefonos
                            </th>
                            <th scope="col">
                                Celular
                            </th>
                            <th>
                                Sexo
                            </th>
                            <th>
                                Email
                            </th>
                            {{--
                            <th>
                                Posición
                            </th>
                            <th>
                                Departamento
                            </th>
                            <th>
                                Salario
                            </th>
                            --}}
                            <th>
                                Fecha Nacimiento
                            </th>
                            <th>
                                Acción
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agenda as $datos)
                        <tr>
                            <th scope="row">
                                {{ $datos->id }}
                            </th>
                            <td>
                                {{$datos->nombres}} {{$datos->apellidos}}
                            </td>
                            <td>
                                {{$datos->telefono}}
                            </td>
                            <td>
                                {{$datos->celular}}
                            </td>
                            <th>
                                {{$datos->genero}}
                            </th>
                            <td>
                                {{$datos->email}}
                            </td>
                            {{--
                            <td>
                                {{$datos->posicion}}
                            </td>
                            <td>
                                {{$datos->departamento}}
                            </td>
                            <td>
                                {{$datos->salario}}
                            </td>
                            --}}
                            <td>
                                {{$datos->fechadenacimiento}}
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('agenda.edit', $datos->id)}}">
                                    Editar
                                </a>
                                <a class="btn bg-danger text-light btn-sm" href="{{ route('agenda.confirm', $datos->id)}}">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{ $agenda->links() }}
                    </ul>
                </nav>
            </br>
        </div>
    </div>
</div>
@include('plantilla.footer', ['container'=>'container-fluid' ])
@endsection
