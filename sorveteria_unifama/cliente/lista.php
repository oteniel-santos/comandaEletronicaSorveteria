<?php

require('../conecta.php');
require('cliente.banco.php');

$dadosClientes = listarClientes($conexao);

require('tabela.lista.php');


