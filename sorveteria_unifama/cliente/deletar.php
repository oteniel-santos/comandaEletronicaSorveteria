<?php

require('../conecta.php');
require('cliente.banco.php');

$cod = $_POST['cod'];

if($dados = buscarPorId($conexao, $cod)){
    deletarCliente($conexao, $cod);
   // echo 'Cliente deletado com sucesso';
    header("Location: lista.php");
}else{
    echo 'Cliente não encontrado';
}




