<?php require('../cabecalho.php');    ?>


<div class="container">

<div class="row justify-content-between my-4">
    <div class="ml-4" >
        <h3>Clientes</h3>
    </div>

    <div class="ml-4">
        <a class="btn btn-success" href="<?= link_para("/cliente/cadastrar.php") ?> "> Novo </a>
    </div>

</div>

<div class="row">
<table class="table col">
  <thead>
    <tr>
        <td>Cod</td>
        <td>Nome</td>
        <td>End</td>
        <td>Fone</td>
        <td>CPF</td>
        <td>Cadastro</td>
        <td>Ações</td>
    </tr>
  </thead> 

  <tbody>  
  
 <?php  foreach($dadosClientes as $cliente)   { ?>
    <tr>
        <td> <?php echo $cliente->cod ?>  </td>
        <td> <?php echo $cliente->nome ?>  </td>
        <td> <?php echo $cliente->end ?>  </td>
        <td> <?php echo $cliente->fone ?>  </td>
        <td> <?php echo $cliente->cpf ?>  </td>
        <td> <?php echo $cliente->dataCadastro ?>  </td>
        <td>
            <div class="row">
            <!-- editar -->
                <div class="col-6">
                 <a class="btn btn-primary form-control" href="<?php echo link_para("/cliente/editar.php?cod={$cliente->cod}") ?>">Editar</a>   
                </div>
 
            
            <!-- deletar -->
                <div class="col-6">
                    <form method="post" action="<?php echo(link_para("/cliente/deletar.php"));?>">
                    <input type="hidden" name="cod" value="<?=$cliente->cod?>">
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