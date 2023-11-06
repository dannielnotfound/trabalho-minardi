<?php

namespace App\Models;

use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    use HasFactory;

    protected $fillable = []; //Fill


    // Fazer como mutators
    protected $casts = [
        'status' =>  EnumDespesaStatus::class,
        'tipo_despesa' => EnumDespesaTipo::class
    ];
}
