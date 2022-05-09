<?php

$conta1 = [
  'titular' => 'Gabriel',
  'saldo' => 1000
];

$conta2 = [
  'titular' => 'Alberto',
  'saldo' => 11000
];

$conta3 = [
  'titular' => 'Maria',
  'saldo' => 100
];
echo $conta1['titular'];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
