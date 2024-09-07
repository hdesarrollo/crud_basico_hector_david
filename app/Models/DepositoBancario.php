<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositoBancario extends Model
{
    use HasFactory;

    protected $table = "depositos_bancarios";
    protected $primaryKey = "id";
    protected $fillable = ['beneficiario', 'concepto', 'valor'];
}
