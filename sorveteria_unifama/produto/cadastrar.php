<?php

require('../conecta.php');
require('produto.banco.php');

//carrega dados em branco para array $dados
$dados=[];
$dados['cod'] = '';
$dados['sabor'] = '';
$dados['preco'] = '';

function tem_post(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';    
}


if(tem_post()){
    $cod = $_POST['codProduto'];
    $sabor = $_POST['sabor'];
    $preco = $_POST['preco'];

    if (cadastrarProduto($conexao, $sabor, $preco)){
            echo('cadastrado com sucesso');
        }else{
            echo 'erro ao cadastrar';
        }

    header("Location: lista.php");
    die();   

}

include('../cabecalho.php');
?>

<div class='container'>

   <h3 class="mt-4">Cadastrar Cliente</h3>

   <form action="<?php echo link_para("/produto/cadastrar.php");?>"  method="post">

        <!-- campos do formulário -->
        <?php include('form.campos.php'); ?>

    <div>
        <input type="submit" class="btn btn-info px-4" value="Cadastrar"/>
    </div>    
      
   </form> 


</div>

<?php include('../rodape.php'); ?>
