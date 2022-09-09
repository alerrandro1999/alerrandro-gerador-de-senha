<?php

namespace App\Traits;

trait TraitsAuxiliares
{
    public static function arrayAlfabetoAleatorio()
    {
        return $array = range('A', 'Z');
    }

    public static function letraAleatoria()
    {
            $array = self::arrayAlfabetoAleatorio();
            shuffle($array);
            return $array[0];
    }
}