<?php
require('../conecta.php');
require('comanda.banco.php');

$cod = 5;
$detalhesComanda = listarDetalhesComanda($conexao, $cod);
print_r($detalhesComanda);

