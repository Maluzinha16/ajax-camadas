<?php

$NOME = $_REQUEST['NOME'];
$ANIMAL = $_REQUEST['ANIMAL'];

if (empty($NOME)){

    $dados = array(
        "tipo" => 'erro',
        "mansagem" => 'Existem cpmo(s) obrigatório(s) não preenchido(s)'
    );


}else{
    switch($ANIMAL){  
        case '1' : $dados = array(
            "tipo" => 'cachorro.jpg',
            "mensagem" => 'Olá. '.$NOME.', sabemos que o seu animal preferido é o cachorro'
        );
        break;
        case '2' : $dados = array(
            "tipo" => 'gato.jpg',
            "mensagem" => 'Olá. '.$NOME.', sabemos que o seu animal preferido é o gato'
        );
        break;
        case '3' : $dados = array(
            "tipo" => 'passaro.jpg',
            "mensagem" => 'Olá. '.$NOME.', sabemos que o seu animal preferido é o peixe'
        );
        break;
    }
}

echo json_encode($dados);