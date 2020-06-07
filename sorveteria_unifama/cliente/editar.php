<?php

require('../conecta.php');
require('cliente.banco.php');

//#1 -BUSCAR OS DADOS DO CLIENTE SELECIONADO





if(isset($_GET['cod'])){
    $cod = $_GET['cod'];
    $dados = buscarPorId($conexao, $cod);
}else{
    echo('cliente não encontrado');
}


function clienteExiste($id, $conexao){
    return $dados = buscarPorId($conexao, $id);
}



if(isset($_POST['cod']) && clienteExiste($_POST['cod'], $conexao)){
    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $fone = $_POST['fone'];
    $end = $_POST['end'];
    $dataCadastro = $_POST['dataCadastro'];

    if(atualizarCliente($conexao,$cod,$nome, $cpf, $fone, $end, $dataCadastro)){
        echo('alterado com sucesso');
    }else{
        echo ('erro ao alterar');
    }

    header("Location: lista.php");
    die();

}


//#02 - Carregar dados para o formulário

include('../cabecalho.php');


?>
<div class="container">
    <h3>Editar </h3>

    <form action="<?=link_para("/cliente/editar.php");?>" method="post">
      <?php require('form.campos.php'); ?>
      <div>
        <input type="submit" class="btn btn-info px-4" value="Atualizar"/>    
      </div>
    </form>

</div>