@extends('layouts.app')

@section('content')
   <div class="row">
       <div class="col-6"><h1>Nuevo Depósito</h1></div>
       <div class="col-6">
           <a href="{{ route('depositos.index') }}" class="btn btn-info mt-2">Regresar</a>
       </div>

       <div class="col-12">
           <div class="card">
               <div class="card-body">
                   <div class="card-text">
                       <form action="{{ route('depositos.store') }}" method="POST">
                           @csrf
                           <div class="mb-3">
                               <label for="beneficiario" class="form-label">Beneficiario</label>
                               <input type="text" class="form-control" name="beneficiario" id="beneficiario" required>
                           </div>
                           <div class="mb-3">
                               <label for="Concepto" class="form-label">Concepto</label>
                               <input type="text" class="form-control" name="concepto" id="concepto" required>
                           </div>
                           <div class="mb-3">
                               <label for="valor" class="form-label">Valor:</label>
                               <input type="number" class="form-control" step="0.01" name="valor" id="valor" required>
                           </div>
                           <button type="submit" class="btn btn-primary">Guardar</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
