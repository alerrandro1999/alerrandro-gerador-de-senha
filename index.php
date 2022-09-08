<?php
require __DIR__ . '/vendor/autoload.php';

use App\GeradorDeSenhas\Senhas;

$ger = new Senhas;

$number = $ger->senhaSimplesNumerica();

$numberletras = $ger->senhaComLetras();

$numberletrasprimeiramaiuscula = $ger->senhaComLetrasEPrimeiraMaiuscula();



// echo $number;
// echo PHP_EOL;
// echo $numberletras;
// echo PHP_EOL;
echo $numberletrasprimeiramaiuscula;
