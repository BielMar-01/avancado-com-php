<?php

function sacar($conta, $valorSacar)
{
  if ($valorSacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
  } else {
    $conta['saldo'] -= $valorSacar;
  }
  return $conta;
}

function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL;
}

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
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], valorSacar: 20000);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
