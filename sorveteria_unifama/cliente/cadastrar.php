<?php

require('../conecta.php');
require('cliente.banco.php');

$dados=[];
$dados['cod'] = '';
$dados['nome'] = '';
$dados['fone'] = '';
$dados['end'] = '';
$dados['cpf'] = '';
$dados['dataCadastro'] = '';

function tem_post(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';    
}


if(tem_post()){
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$fone = $_POST['fone'];
$end= $_POST['end'];
$cpf= $_POST['cpf'];
$dataCadastro = $_POST['dataCadastro'];

if (cadastrarCliente($conexao, $nome, $cpf, $fone, $end, $dataCadastro)){
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
    <h3>Cadastrar Cliente</h3>

   <form action="<?php echo link_para("/cliente/cadastrar.php");?>"  method="post">

        <!-- campos do formulário -->
        <?php include('form.campos.php'); ?>

    <div>
        <input type="submit" class="btn btn-info px-4" value="Cadastrar"/>
    </div>    
      
   </form> 


</div>

<?php include('../rodape.php'); ?>
