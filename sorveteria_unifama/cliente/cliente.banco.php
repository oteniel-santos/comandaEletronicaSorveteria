<?php

function listarClientes($conexao){
    $dados = $conexao->query('SELECT * FROM cliente');
    return $listaClientes = $dados->fetchAll(PDO::FETCH_OBJ);
  // print_r($listaClientes);
}

function buscarPorId($conexao, $id){  
  $dados = $conexao->query("SELECT * FROM cliente WHERE cod ={$id}");
  return $dadosCliente = $dados->fetch(PDO::FETCH_ASSOC);
}


function cadastrarCliente($conexao, $nome, $cpf, $fone, $end, $dataCadastro){
  $query = "INSERT INTO cliente (nome, cpf, fone, end, dataCadastro)
  VALUES ('{$nome}','{$cpf}','{$fone}','{$end}','{$dataCadastro}')";

  return $conexao->query($query);
}

function atualizarCliente($conexao,$cod,$nome, $cpf, $fone, $end, $dataCadastro){
  $query = "UPDATE cliente SET
            nome='{$nome}',
            cpf = '{$cpf}',
            fone = '{$fone}',
            end = '{$end}',
            dataCadastro = '{$dataCadastro}'
            WHERE cod={$cod}";
    return $conexao->query($query);          
}


function deletarCliente($conexao, $cod){
$query = "DELETE FROM cliente WHERE cod={$cod}";
return $conexao->query($query);   
}




?>


