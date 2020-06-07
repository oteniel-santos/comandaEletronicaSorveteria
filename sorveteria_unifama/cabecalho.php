<?php
    require('links.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo(link_para('bootstrap/css/bootstrap.css')) ?>">
    <title>Sistema de Comanda Eletrônica</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-info">
        <div class="container">
            <a href="#" class="navbar-brand" > Sorveteria Unifama </a>

        <!-- Botão haburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuprincipal" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu  -->
        <div class="collapse navbar-collapse" id="menuprincipal">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a  class="nav-link" href="<?php echo(link_para('comanda/lista.php')) ?>">Comanda</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link"  href="<?php echo(link_para('cliente/lista.php')) ?>">Clientes</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link"  href="<?php echo(link_para('vendedor/lista.php')) ?>">Vendedores</a>
                </li>
                
                <li class="nav-item">
                   <a class="nav-link"  href="<?php echo(link_para('produto/lista.php')) ?>">Produtos</a>
                </li>
            </ul>
            </div>  
        </div>
    </nav>