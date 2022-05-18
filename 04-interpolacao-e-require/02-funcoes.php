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
