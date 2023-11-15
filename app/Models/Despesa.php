<?php

namespace App\Models;

use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "titulo",
        "descricao",
        "vencimento",
        "valor",
        "categoria",
        "tipo_despesa",
        "status",
    ]; 
    

    // public function status(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn (EnumDespesaStatus $status) => ($status),
    //     );
    // }

    // public function tipo_despesa(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn (EnumDespesaTipo $tipo) => $tipo->name,
    //     );
    // }
}
