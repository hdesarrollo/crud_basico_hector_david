@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Detalle del Depósito</h1>
        </div>
        <div class="col-6">
            <a href="{{ route('depositos.index') }}" class="btn btn-info mt-2">Regresar</a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>#REF: </b>{{$deposito->id}}</li>
                            <li class="list-group-item"><b>Beneficiario: </b>{{$deposito->beneficiario}}</li>
                            <li class="list-group-item"><b>Concepto: </b>{{$deposito->concepto}}</li>
                            <li class="list-group-item"><b>Valor: </b> {{number_format($deposito->valor, 2)}}</li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="{{ route('depositos.edit', $deposito->id) }}" class="btn btn-info">Editar</a>
                    <form action="{{ route('depositos.destroy', $deposito->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
