<?php

namespace App\InterfaceSenha;

use App\Traits\TraitsAuxiliares;

interface InterfaceGerador 
{
    public static function senhaSimplesNumerica();

    public static function senhaComLetras();

    public static function senhaComLetrasEPrimeiraMaiuscula();

    public static function concatenar();

}