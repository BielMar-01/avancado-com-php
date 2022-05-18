<?php

function sacar(array $conta, float $valorSacar): array
{
  if ($valorSacar > $conta['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
  } else {
    $conta['saldo'] -= $valorSacar;
  }
  return $conta;
}

function exibeMensagem(string $mensagem)
{
  echo $mensagem . PHP_EOL;
}

function deposito(array $conta, float $valorADepositar): array
{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Depositos precisam ser positivos");
  }
  return $conta;
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
$contasCorrentes['123.456.789-11'] = deposito($contasCorrentes['123.456.789-11'], 9000);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem(
    "$cpf $conta[titular] $conta[saldo]"
  ); // Strings da forma simples
  exibeMensagem(
    "$cpf {$conta['titular']} {$conta['saldo']}"
  ); // Strings de forma "complexa"
}
