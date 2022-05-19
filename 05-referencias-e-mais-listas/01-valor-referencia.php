<?php

// include '02-funcoes.php';  No include ele não retorna erro caso o caminho esteja errado
// require '02-funcoes.php'; No require ele retorna o erro porem se tiver outro rquire igual ele da outro erro
require_once '01-funcoes.php'; // No require_once ele não eixa que outro require igual seja feito

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
  exibeMensagem(
    "$cpf {$conta['titular']} {$conta['saldo']}"
  );
}
