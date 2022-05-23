<?php

require_once '01-funcoes.php';

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

titularLetrasMaiscula($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
  // list('titular' => $titular, 'saldo' => $saldo) = $conta;
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  exibeMensagem(
    "$cpf $titular $saldo"
  );
}
