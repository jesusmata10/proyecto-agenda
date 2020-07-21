@extends('plantilla.plantilla')

@section('titulo', 'Eliminar')

@section('contenido')
<br>
    <div class="container py5">
        <h1>
            ¿Desea eliminar el registro de {{ $agenda->nombres}} {{ $agenda->apellidos}}?
        </h1>
        <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST">
            @method('DELETE')
		@csrf
            <button class="btn btn-danger" type="submit">
                Eliminar
            </button>
            <a class="btn alert-info" href="{{ route('cancelar')}}">
                Cancelar
            </a>
        </form>
    </div>
    @endsection()
</br>