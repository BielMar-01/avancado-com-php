<?php

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

$contasCorrentes['123.456.789-10']['saldo'] -= 500;

if (500 > $contasCorrentes['123.456.789-12']['saldo']) {
  exibeMensagem("Você não pode sacar este valor");
} else {
  $contasCorrentes['123.456.789-12']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
