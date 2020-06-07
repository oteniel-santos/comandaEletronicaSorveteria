<?php

require('../conecta.php');
require('cliente.banco.php');

$cod = $_POST['cod'];


    DeletarVendedor($cod, $conexao);
    header("Location: lista.php");
    die();




