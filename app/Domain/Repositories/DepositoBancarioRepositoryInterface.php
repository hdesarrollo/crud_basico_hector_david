<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\DepositoBancarioEntity;

interface DepositoBancarioRepositoryInterface
{
    public function save(DepositoBancarioEntity $deposito);

    public function findAll();

    public function findById($id);

    public function update(DepositoBancarioEntity $deposito);

    public function delete($id);
    
}
