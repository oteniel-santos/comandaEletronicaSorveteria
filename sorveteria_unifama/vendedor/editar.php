<?php

require('../conecta.php');
require('vendedor.banco.php');

//#1 -BUSCAR OS DADOS DO CLIENTE SELECIONADO





if(isset($_GET['codVendedor'])){
    $cod = $_GET['codVendedor'];
    $dados = localizarVendedorPorId($cod, $conexao);
}else{
    echo('vendedor não encontrado');
}


function vendedorExiste($id, $conexao){
    return $dados = localizarVendedorPorId($id, $conexao);
}



if(isset($_POST['codVendedor']) && vendedorExiste($_POST['codVendedor'], $conexao)){
    $cod = $_POST['codVendedor'];
    $nome = $_POST['nomeVendedor'];
    $comissao = $_POST['comissaoVenda'];

    if(AtualizarVendedor($conexao, $cod, $nome, $comissao)){
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

    <form action="<?=link_para("/vendedor/editar.php");?>" method="post">
      <?php require('form.campos.php'); ?>
      <div>
        <input type="submit" class="btn btn-info px-4" value="Atualizar"/>    
      </div>
    </form>

</div>

