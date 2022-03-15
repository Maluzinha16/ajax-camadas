<?php

$NOME = $_REQUEST['NOME'];
$IDADE = $_REQUEST['IDADE'];
$BEBIDA = $_REQUEST['BEBIDA'];
$ATUAL = 2022;
$CALCULO = $ATUAL - $IDADE;

if (empty($NOME)){

    $dados = array(
        "tipo" => 'success',
        "mensagem" => 'Existem cpmo(s) obrigatório(s) não preenchido(s)'
    );


}else{
    
    if ($CALCULO >=18 && $BEBIDA == 'vodik'){
        $dados = array(
            "tipo" => 'success',
            "mensagem" => 'pode beber bebida alcolica'
        );
    }
    else{
        $dados = array(
            "tipo" => 'success',
            "mensagem" => 'Não pode beber bebida alcolica'
        );
    }
    if ($BEBIDA == 'suco' || $BEBIDA == 'refrigerante '){
        $dados = array(
            "tipo" => 'success',
            "mensagem" => 'Você pode beber mesmo sendo menor de idade'

        );
    }
    
}

echo json_encode($dados);