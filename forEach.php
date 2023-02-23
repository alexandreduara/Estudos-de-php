<?php

function sacar($Conta, $valorASacar){
    if (500 > $Conta){
        exibeMensagem("Você não pode sacar");
    } else {
        $Conta['saldo'] -= $valorASacar;
    };

    return $Conta;

};
function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
};



$contasCorrentes = [
    123456789 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    123451532 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    2312415512 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123456789'] = sacar($contasCorrentes['123456789'], 500);
$contasCorrentes['123451532'] = sacar($contasCorrentes['123451532'], 500);

foreach ($contasCorrentes as $conta) {
    exibeMensagem($conta['titular'] . " | Saldo: " . $conta['saldo']);
}
