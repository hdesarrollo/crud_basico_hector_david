@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1>Lista de Depósitos</h1>
        </div>
        <div class="col-6">
            <a href="{{ route('depositos.create') }}" class="btn btn-success mt-2">Crear Nuevo Depósito</a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#REF</th>
                                <th>Beneficiario</th>
                                <th>Concepto</th>
                                <th>Valor</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($depositos))
                            @foreach($depositos as $deposito)
                                <tr>
                                    <td>
                                        {{ $deposito->id }}
                                    </td>
                                    <td>
                                        {{ $deposito->beneficiario }}
                                    </td>
                                    <td>
                                        {{ $deposito->concepto }}
                                    </td>
                                    <td>
                                        {{number_format($deposito->valor, 2)}}
                                    </td>
                                    <td>
                                        <a href="{{ route('depositos.show', $deposito->id) }}" class="btn btn-warning">Ver</a>
                                        <a href="{{ route('depositos.edit', $deposito->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('depositos.destroy', $deposito->id) }}" method="POST"
                                              style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td class="text-center text-info" colspan="5">No se encontraron registros.</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
