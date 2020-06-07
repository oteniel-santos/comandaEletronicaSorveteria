<?php
require('../conecta.php');
require('comanda.banco.php');

$dadosComandas = listarComandas($conexao);

//print_r($dadosComandas);
require('../cabecalho.php');
?>


<div class="container">

<div class="row">
    <div class="mt-4 col-10">
        <h3>Comandas</h3>
    </div>

    <div class="col-2">
        <a href="<?=link_para( "/comanda/cadastrar.php")?>" class="btn btn-info mt-4" >Novo</a>
    </div>
</div>


<table class="table">
    <thead>
        <tr>
            <th>Nº</th>
            <th>Data</th>
            <th>Cliente</th>
            <th>Vendedor</th>
            <th>total de Itens</th>
            <th>Subtotal</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach ($dadosComandas as $comanda) { ?>
        <tr>
            <td><?=$comanda->numComanda?></td>
            <td><?=$comanda->dataComanda?></td>
            <td><?=$comanda->nomeCliente?></td>
            <td><?=$comanda->nomeVendedor?></td>
            <td><?=$comanda->totalItens?></td>
            <td><?=$comanda->subtotal?></td>
            <td><?=$comanda->status == 1?'Aberta':'Fechada' ?></td>
            <td> <a href="#" class="btn btn-secondary"> Ver Detalhes </a> </td>
        </tr>

    <?php  } ?>
    </tbody>
</table>

</div>
<?php require('../rodape.php'); ?>



