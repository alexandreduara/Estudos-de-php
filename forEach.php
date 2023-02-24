<?php

require_once 'funcoes-banco.php';

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
$contasCorrentes['123451532'] = depositar($contasCorrentes['123451532'], 1500);

alterarParaLetrasMaiusculas($contasCorrentes['123456789']);

// unset ($contasCorrentes['123451532']); - para remover um item

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo : <?=  $conta['saldo'] ?>
        </dd>
        <?php }; ?>
    </dl>
</body>
</html>