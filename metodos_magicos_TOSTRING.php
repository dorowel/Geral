<?php


class  Pessoa
{

    private $dados = array();

    public function __set($nome, $valor)
    {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome)
    {
        return $this->dados[$nome];
    }

    public function __tostring(){

        return "Tentei imprimir o objeto";

    }


}

$pessoa = new Pessoa();
$pessoa->nome = 'Welliton';
$pessoa->idade = 26;
$pessoa->sexo = 'Masculina';

echo $pessoa;



