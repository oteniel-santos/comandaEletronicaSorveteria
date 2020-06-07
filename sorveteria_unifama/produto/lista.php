<?php

require('../conecta.php');
require('produto.banco.php');

$dadosProdutos = listarProdutos($conexao);

require('tabela.lista.php');


