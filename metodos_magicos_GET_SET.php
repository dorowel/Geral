<?php

class  Pessoa {

    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

 public function __get($nome){
        return $this->dados[$nome];
 }

}

$pessoa = new Pessoa();
$pessoa->nome = 'Welliton';
$pessoa->idade = 26;
$pessoa->sexo = 'Masculina';

echo $pessoa->nome.PHP_EOL;
echo $pessoa->idade.PHP_EOL;
echo $pessoa->sexo.PHP_EOL;



