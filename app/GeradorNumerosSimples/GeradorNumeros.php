<?php

namespace App\GeradorNumerosSimples;

use App\GeradorDeSenha\InterfaceGerador;

class GeradorNumeros implements InterfaceGerador  
{
    public static function senhaSimplesNumerica() : int
    {
        return mt_rand(11111111, 99999999);
    }
}