<?php require('../cabecalho.php');    ?>


<div class="container">

<div class="row justify-content-between my-4">
    <div class="ml-4" >
        <h3>Produtos</h3>
    </div>

    <div class="ml-4">
        <a class="btn btn-success" href="<?= link_para("/produto/cadastrar.php") ?> "> Novo </a>
    </div>

</div>

<div class="row">
<table class="table col">
  <thead>
    <tr>
        <td>Cod</td>
        <td>Sabor</td>
        <td>Preço</td>
        <td>Ações</td>
    </tr>
  </thead> 

  <tbody>  
  
 <?php  foreach($dadosProdutos as $produto)   { ?>
    <tr>
        <td> <?php echo $produto->codProduto ?>  </td>
        <td> <?php echo $produto->sabor ?>  </td>
        <td> <?php echo $produto->preco ?>  </td>
        <td>
            <div class="row">
            <!-- editar -->
                <div class="col-3">
                 <a class="btn btn-primary form-control" href="<?php echo link_para("/produto/editar.php?codProduto={$produto->codProduto}") ?>">Editar</a>   
                </div>
 
            
            <!-- deletar -->
                <div class="col-3">
                    <form method="post" action="<?php echo(link_para("/produto/deletar.php"));?>">
                    <input type="hidden" name="codProduto" value="<?=$produto->codProduto?>">
                    <button class="btn btn-danger form-control" type="submit" onclick="return confirm('Tem certeza que deseja deletar?')" >Deletar</button>
                        
                </form>
                </div>


           
            </div>
        </td>
    </tr>

 <?php } ?>   
  </tbody>  
</table>
</div>

</div>

<?php require('../rodape.php');    ?>