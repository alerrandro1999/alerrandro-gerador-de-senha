<?php
require __DIR__ . '/vendor/autoload.php';

use App\GeradorDeSenhas\Senhas;

use App\Traits\TraitsAuxiliares;

$ger = new Senhas;

$number = $ger->senhaSimplesNumerica();

$numberletras = $ger->senhaComLetras();

$numberletrasprimeiramaiuscula = $ger->senhaComLetrasEPrimeiraMaiuscula();





// echo $number;
// echo PHP_EOL;
// echo $numberletras;
// echo PHP_EOL;
// echo $numberletrasprimeiramaiuscula;

echo '<pre>';
print_r($ger->senhaComLetrasEPrimeiraMaiuscula());
echo '</pre>';exit;