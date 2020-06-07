<?php

require('../conecta.php');
require('vendedor.banco.php');

$dados=[];
$dados['cod'] = '';
$dados['nomeVendedor'] = '';
$dados['comissaoVenda'] = '';


function tem_post(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';    
}


if(tem_post()){
$cod = $_POST['codVendedor'];
$nome = $_POST['nomeVendedor'];
$fone = $_POST['comissaoVenda'];


if (CadastrarVendedor($conexao, $nome, $comissao)){
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
    <h3>Cadastrar Vendedor</h3>

   <form action="<?php echo link_para("/vendedor/cadastrar.php");?>"  method="post">

        <!-- campos do formulário -->
        <?php include('form.campos.php'); ?>

    <div>
        <input type="submit" class="btn btn-info px-4" value="Cadastrar"/>
    </div>    
      
   </form> 


</div>

<?php include('../rodape.php'); ?>
