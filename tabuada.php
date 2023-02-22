<?php

$numero = 2;
$tamanhoDaTabuada = 10;

for ($i = 1; $i <= $tamanhoDaTabuada; $i++ ){
    $multiplicacao = $numero * $i;

    echo "$numero X $i = " . $multiplicacao . PHP_EOL;
}
