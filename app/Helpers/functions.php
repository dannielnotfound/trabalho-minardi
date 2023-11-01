<?php

namespace App\Helpers;


use App\Enums\EnumDespesaStatus;
use App\Enums\EnumDespesaTipo;

if (!function_exists('getDespesasStatus')){
    function getDespesasStatus(string $value)
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