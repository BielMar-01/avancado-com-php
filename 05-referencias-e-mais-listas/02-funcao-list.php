<?php

$idadeList = [29, 21, 22, 23, 24, 25];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
  echo $idade . PHP_EOL;
}
