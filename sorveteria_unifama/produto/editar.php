<?php

require('../conecta.php');
require('produto.banco.php');

echo 'POST:';
print_r($_POST);
echo '<br>GET:';
print_r($_GET);

//#1 -BUSCAR OS DADOS DO CLIENTE SELECIONADO
if(isset($_GET['codProduto'])){
    $cod = $_GET['codProduto'];
    $dados = buscarPorId($conexao, $cod);
}else{
    echo('produto não encontrado');
}


function produtoExiste($id, $conexao){
    return $dados = buscarProdutoPorId($conexao, $id);
}



if(isset($_POST['codProduto']) && produtoExiste($_POST['codProduto'], $conexao)){
    $cod = $_POST['codProduto'];
    $sabor = $_POST['sabor'];
    $preco = $_POST['preco'];
    
    if(atualizarProduto($conexao,$cod,$sabor, $preco)){
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

<h3 class="mt-4">Editar </h3>

    <form action="<?=link_para("/produto/editar.php");?>" method="post">
        
      <?php require('form.campos.php'); ?>

    <div>
        <input type="submit" class="btn btn-info px-4" value="Atualizar"/>    
    </div>

    </form>

</div>