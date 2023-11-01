<?php

namespace App\Enums;

enum EnumDespesaStatus :string
{
    case A = "A vencer";
    case F = "Pago";
    case P = "Atrasada";

    public static function fromValue(string $value):string
    {
        foreach (self::cases() as $enum) {
            if($value === $enum->name){
                return $enum->value;
            }
        }

        throw new \ValueError("$enum->name não é válido");
    }
}