<?php

namespace App\Domain\Entities;

class DepositoBancarioEntity
{
    private $id;
    private $beneficiario;
    private $concepto;
    private $valor;

    public function __construct($beneficiario, $concepto, $valor)
    {
        $this->beneficiario = $beneficiario;
        $this->concepto = $concepto;
        $this->valor = $valor;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBeneficiario()
    {
        return $this->beneficiario;
    }

    public function getConcepto()
    {
        return $this->concepto;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

}
