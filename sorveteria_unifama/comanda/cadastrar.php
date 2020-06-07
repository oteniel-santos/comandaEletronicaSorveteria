<?php
require('../conecta.php');
require('comanda.banco.php');
require('../cliente/cliente.banco.php');
require('../vendedor/vendedor.banco.php');
require('../produto/produto.banco.php');


//carregar dados dos selects - clientes/vendedores
$dadosClientes   =  listarClientes($conexao);
$dadosVendedores =  listarVendedores($conexao); 



//se tem post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //cadastrar comanda
    $dataComanda = $_POST['dataComanda']; 
    $codCliente = $_POST['codCliente'];
    $codVendedor = $_POST['codVendedor'];

    cadastrarComanda($conexao, $dataComanda, $codCliente, $codVendedor);
    //redirecionar para lista.php
    header("Location: lista.php");
}



require('../cabecalho.php');
?>
<div class="container">

<div class="row">
    <div class="col">
        <h3>Nova Comanda</h3>
    </div>

    <div>
        <a href="<?=link_para("/comanda/lista.php");?>" >Voltar para lista das Comandas</a>
    </div>
</div>

<form action="<?=link_para("/comanda/cadastrar.php");?> " method="post">

    <!-- CAMPOS DO FORMULÁRIO -->

    <!-- Select Dados dos clientes -->
        <label>Cliente</label>
        <select name="codCliente" class="form-control">
           <option value="">--Selecione um cliente--</option>
           <?php foreach ($dadosClientes as $cliente) { ?>       
                <option value="<?=$cliente->cod?>"><?=$cliente->nome?></option>
            <?php }  ?>
        </select>
    
    
    <!-- Select Dados dos Vendedores -->
    <label>Vendedor</label>
        <select name="codVendedor" class="form-control">
        <option value="">--Selecione um vendedor--</option>
           <?php foreach ($dadosVendedores as $vendedor) { ?>       
                <option value="<?=$vendedor->codVendedor?>"><?=$vendedor->nomeVendedor?></option>
            <?php }  ?>
        </select>

    
    <!-- input Data -->
    <label>Data</label>
    <input type="date" class="form-control" name="dataComanda">


    <!-- CAMPOS DO FORMULÁRIO -->
    <button type="submit" class="btn btn-info">Cadastrar</button>        

</form>

</div>
<?php require('../rodape.php');?>
