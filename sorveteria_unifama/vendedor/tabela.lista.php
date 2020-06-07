<?php require('../cabecalho.php');    ?>


<div class="container">

<div class="row justify-content-between my-4">
    <div class="ml-4" >
        <h3>Vendedores</h3>
    </div>

    <div class="ml-4">
        <a class="btn btn-success" href="<?= link_para("/vendedor/cadastrar.php") ?> "> Novo </a>
    </div>

</div>

<div class="row">
<table class="table col">
  <thead>
    <tr>
        <td>Cod</td>
        <td>Nome</td>
        <td>Comissão</td>
    </tr>
  </thead> 

  <tbody>  
  
 <?php  foreach($dadosVendedores as $vendedor)   { ?>
    
    <tr>
        <td> <?php echo $vendedor->codVendedor ?>  </td>
        <td> <?php echo $vendedor->nomeVendedor ?>  </td>
        <td> <?php echo $vendedor->comissaoVenda ?>  </td>
        <td>
            <div class="row">
            <!-- editar -->
                <div class="col-6">
                 <a class="btn btn-primary form-control" href="<?php echo link_para("/vendedor/editar.php?codVendedor={$vendedor->codVendedor}") ?>">Editar</a>   
                </div>
 
            
            <!-- deletar -->
                <div class="col-6">
                    <form method="post" action="<?php echo(link_para("/vendedor/deletar.php"));?>">
                    <input type="hidden" name="codVendedor" value="<?=$vendedor->codVendedor?>">
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