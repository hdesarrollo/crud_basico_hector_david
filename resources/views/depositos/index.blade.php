@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-12">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <div>{{ session('success') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
