<?php

namespace App\Infrastructure\Persistence;

use App\Domain\Entities\DepositoBancarioEntity;
use App\Domain\Repositories\DepositoBancarioRepositoryInterface;
use App\Models\DepositoBancario as DepositoBancarioModel;
class DepositoBancarioRepository implements DepositoBancarioRepositoryInterface
{

    public function save(DepositoBancarioEntity $deposito)
    {
        return DepositoBancarioModel::create([
            'beneficiario' => $deposito->getBeneficiario(),
            'concepto' => $deposito->getConcepto(),
            'valor' => $deposito->getValor()
        ]);
    }

    public function findAll()
    {
        return DepositoBancarioModel::orderBy('id', 'desc')->get();
    }

    public function findById($id)
    {
        return DepositoBancarioModel::findOrFail($id);
    }

    public function update(DepositoBancarioEntity $deposito)
    {
        $model = DepositoBancarioModel::findOrFail($deposito->getId());
        $model->update([
            'beneficiario' => $deposito->getBeneficiario(),
            'concepto' => $deposito->getConcepto(),
            'valor' => $deposito->getValor()
        ]);
    }

    public function delete($id)
    {
        return DepositoBancarioModel::destroy($id);
    }
}
