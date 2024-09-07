<?php

namespace App\Application\Services;

use App\Domain\Entities\DepositoBancarioEntity;
use App\Domain\Repositories\DepositoBancarioRepositoryInterface;

class DepositoBancarioService
{
    private $repository;

    public function __construct(DepositoBancarioRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createDeposito($beneficiario, $concepto, $valor)
    {
        $deposito = new DepositoBancarioEntity($beneficiario, $concepto, $valor);
        return $this->repository->save($deposito);
    }

    public function getAllDepositos()
    {
        return $this->repository->findAll();
    }

    public function getDepositoById($id)
    {
        return $this->repository->findById($id);
    }

    public function updateDeposito($id, $beneficiario, $concepto, $valor)
    {

        $deposito = new DepositoBancarioEntity($beneficiario, $concepto, $valor);
        $deposito->setId($id);
        return $this->repository->update($deposito);
    }

    public function deleteDeposito($id)
    {
        return $this->repository->delete($id);
    }
}
