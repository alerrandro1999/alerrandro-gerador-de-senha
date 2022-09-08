<?php
require __DIR__ . '/vendor/autoload.php';

use App\GeradorDeSenhas\Senhas;

$ger = new Senhas;

$number = $ger->senhaSimplesNumerica();

$numberletras = $ger->senhaComLetras();


echo $number;
echo PHP_EOL;
echo $numberletras;

