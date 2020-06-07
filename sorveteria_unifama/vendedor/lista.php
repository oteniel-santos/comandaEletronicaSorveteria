<?php

require('../conecta.php');
require('vendedor.banco.php');

$dadosVendedores = listarVendedores($conexao);

require('tabela.lista.php');


