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
        <div class="col-6"><h1>Actualizar Depósito</h1></div>
        <div class="col-6">
            <a href="{{ route('depositos.index') }}" class="btn btn-info mt-2">Regresar</a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-text">
                        <form action="{{ route('depositos.update', $deposito->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="beneficiario" class="form-label">Beneficiario</label>
                                <input type="text" class="form-control" name="beneficiario" id="beneficiario"
                                       value="{{ $deposito->beneficiario }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="Concepto" class="form-label">Concepto</label>
                                <input type="text" class="form-control" name="concepto" id="concepto"
                                       value="{{ $deposito->concepto }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor:</label>
                                <input type="number" class="form-control" step="0.01" name="valor" id="valor"
                                       value="{{ $deposito->valor }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
