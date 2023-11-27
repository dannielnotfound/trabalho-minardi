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

if (!function_exists('mesPorExtenso')){
    function mesPorExtenso($numeroMes) {
        $meses = [
            1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março', 4 => 'Abril',
            5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto',
            9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
        ];
        return $meses[$numeroMes];
    }
}
