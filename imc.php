<?php 

$peso = 56;
$altura = 1.76;

$imc = $peso / ($altura * $altura);

echo "Seu IMC é $imc" . PHP_EOL;

if ($imc <= 18.4){
    echo"Você está abaixo do seu peso ideal";
} else if ($imc >= 25){
    echo"Você está acima do seu peso ideal";
} else {
    echo"Você está no seu peso ideal";
}