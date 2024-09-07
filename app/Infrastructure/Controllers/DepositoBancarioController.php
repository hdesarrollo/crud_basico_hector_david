<?php

namespace App\Infrastructure\Controllers;

use App\Application\Services\DepositoBancarioService;
use App\Http\Requests\DepositoBancarioRequest;
use Illuminate\Http\RedirectResponse;

class DepositoBancarioController
{

    private $service;

    public function __construct(DepositoBancarioService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $depositos = $this->service->getAllDepositos();
        return view('depositos.index', compact('depositos'));
    }

    public function create()
    {
        return view('depositos.create');
    }

    public function store(DepositoBancarioRequest $request): RedirectResponse
    {
        $this->service->createDeposito(
            $request->input('beneficiario'),
            $request->input('concepto'),
            $request->input('valor')
        );
        return redirect()->route('depositos.index')->with('success', 'Depósito creado correctamente.');
    }

    public function show($id)
    {
        $deposito = $this->service->getDepositoById($id);
        return view('depositos.show', compact('deposito'));
    }

    public function edit($id)
    {
        $deposito = $this->service->getDepositoById($id);
        return view('depositos.edit', compact('deposito'));
    }

    public function update(DepositoBancarioRequest $request, $id): RedirectResponse
    {
        $this->service->updateDeposito(
            $id,
            $request->input('beneficiario'),
            $request->input('concepto'),
            $request->input('valor')
        );
        return redirect()->route('depositos.index')->with('success', 'Depósito actualizado correctamente.');
    }

    public function destroy($id)
    {
        $this->service->deleteDeposito($id);
        return redirect()->route('depositos.index')->with('success', 'Depósito eliminado correctamente.');
    }
}
