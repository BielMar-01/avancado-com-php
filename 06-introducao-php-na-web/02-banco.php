<?php

require_once '02-funcoes.php';

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Gabriel',
    'saldo' => 1000
  ],
  '123.456.789-11' => [
    'titular' => 'Alberto',
    'saldo' => 11000
  ],
  '123.456.789-12' => [
    'titular' => 'Maria',
    'saldo' => 100
  ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], valorSacar: 500);
$contasCorrentes['123.456.789-11'] = deposito($contasCorrentes['123.456.789-11'], 9000);

unset($contasCorrentes['123.456.789-11']);

titularLetrasMaiscula($contasCorrentes['123.456.789-10']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Contas correntes</h1>
  <dl>
    <?php
    foreach ($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <h3><?= $conta['titular']; ?> - <?= $cpf ?></h3>
      </dt>
      <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>
  </dl>
</body>

</html>