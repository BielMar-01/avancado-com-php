<?php

$contasCorrentes = [
  12345678910 => [
    'titular' => 'Gabriel',
    'saldo' => 1000
  ],
  12345678911 => [
    'titular' => 'Alberto',
    'saldo' => 11000
  ],
  12345678912 => [
    'titular' => 'Maria',
    'saldo' => 100
  ]
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . PHP_EOL;
}
