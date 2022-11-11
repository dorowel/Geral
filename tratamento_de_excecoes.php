<?php

class Newsletter {

    public function cadastrarEmail($email)
    {
        if(!filter_var ($email,FILTER_VALIDATE_EMAIL)):
         throw new Exception('Este emmail é invalido',1);
        else:
            echo 'Email cadastrado com sucesso!';
        endif;
    }
}

$newsletter = new Newsletter();
try {
    $newsletter->cadastrarEmail ('dorowelgmail.com');
} catch (Exception $e){
    echo "Mensagem:".$e->getMessage().PHP_EOL;
    echo "Codigo:".$e->getCode().PHP_EOL;
    echo "Linha:".$e->getLine().PHP_EOL;
    echo "Arquivo:".$e->getFile().PHP_EOL;
}

