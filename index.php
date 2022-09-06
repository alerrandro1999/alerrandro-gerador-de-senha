<?php
require __DIR__ . '/vendor/autoload.php';

use App\GeradorNumerosSimples\GeradorNumeros;

$ger = new GeradorNumeros;

$number = $ger->senhaSimplesNumerica();

echo $number;
