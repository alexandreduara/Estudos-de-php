<?php

function sacar(array $Conta, float $valorASacar): array
{
    if (500 > $Conta){
        exibeMensagem("Você não pode sacar");
    } else {
        $Conta['saldo'] -= $valorASacar;
    };

    return $Conta;

};

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Um depósito não pode ser negativo");
    };

    return $conta;
};
function exibeMensagem($mensagem) {
    echo $mensagem . '<br>';
};

function alterarParaLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
};

function exibeConta(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular Saldo: $saldo</li>";
};