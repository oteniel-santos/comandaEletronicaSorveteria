<?php

require('../conecta.php');
require('produto.banco.php');

$cod = $_POST['codProduto'];

if($dados = buscarProdutoPorId($conexao, $cod)){
    deletarProduto($conexao, $cod);
    header("Location: lista.php");
}else{
    echo 'Produto não encontrado';
}




