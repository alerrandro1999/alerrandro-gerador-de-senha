<?php

namespace App\GeradorDeSenhas;

use App\InterfaceSenha\InterfaceGerador;

use App\Traits\TraitsAuxiliares;

class Senhas implements InterfaceGerador
{
    public static function senhaSimplesNumerica(): int
    {
        return mt_rand(11111111, 99999999);
    }

    public static function senhaComLetras()
    {
        return bin2hex(openssl_random_pseudo_bytes(4));
    }

    public static function concatenar()
    {
        return $letra = TraitsAuxiliares::letraAleatoria();
    }

    public static function senhaComLetrasEPrimeiraMaiuscula()
    {
        return self::concatenar() .  bin2hex(openssl_random_pseudo_bytes(4));
    }
} 
