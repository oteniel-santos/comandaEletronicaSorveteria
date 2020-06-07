<?php

function listarProdutos($conexao){
    $dados = $conexao->query('SELECT * FROM produto');
    return $listaProdutos = $dados->fetchAll(PDO::FETCH_OBJ);
  // print_r($listaClientes);
}

function buscarProdutoPorId($conexao, $id){  
  $dados = $conexao->query("SELECT * FROM produto WHERE codProduto ={$id}");
  return $dadosProduto = $dados->fetch(PDO::FETCH_ASSOC);
}


function cadastrarProduto($conexao, $sabor, $preco){
  $query = "INSERT INTO produto (sabor, preco)
  VALUES ('{$sabor}','{$preco}')";

  return $conexao->query($query);
}

function atualizarProduto($conexao,$cod,$sabor, $preco){
  $query = "UPDATE produto SET
            sabor='{$sabor}',
            preco = '{$preco}'
            WHERE codProduto={$cod}";
    return $conexao->query($query);          
}


function deletarProduto($conexao, $cod){
$query = "DELETE FROM produto WHERE codProduto={$cod}";
return $conexao->query($query);   
}


?>


