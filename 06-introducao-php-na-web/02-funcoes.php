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
  echo $mensagem . '<br>';
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

function titularLetrasMaiscula(array &$conta)
{
  // $conta['titular'] = strtoupper($conta['titular']); // Já vem abilitado no php strtoupper
  $conta['titular'] = mb_strtoupper($conta['titular']); // necessario abilitar o mbstring e o extension_dir no php.ini. Essa extensão trabalhar com strings mais complexas
}

function exibeConta(array $conta)
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
