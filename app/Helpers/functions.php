<?php

namespace App\Helpers;

use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;
use App\Enums\EnumReceitasTipo;


if (!function_exists('getDespesasStatus')){
    function getDespesasStatus(string $value): string
    {
        return EnumDespesaStatus::fromValue($value);
    }
}

if (!function_exists('getDespesasTipo')){
    function getDespesasTipo(string $value)
    {
        return EnumDespesaTipo::fromValue($value);
    }
}

if (!function_exists('getReceitasTipo')){
    function getReceitasTipo(string $value)
    {
        return EnumReceitasTipo::fromValue($value);
    }
}