<?php

class Pessoa {

    public $idade;

    public function __clone()
    {
        echo'Esse numero esta sendo clonado';
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade;
echo $pessoa2->idade;
