<?php

namespace App\Enums;

enum EnumReceitasTipo: string
{
    case F = 'Fixa';
    case V = 'Variavel';

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

