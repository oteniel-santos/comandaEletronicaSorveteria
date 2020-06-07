<?php
function listarComandas($conexao){
   $query = " SELECT 
    com.codComanda as numComanda,
    cli.nome as nomeCliente,
    com.dataComanda as dataComanda,
    com.status,
    vend.nomeVendedor,
    COUNT(ic.codComanda) as totalItens,
    SUM(ic.qtde * prod.preco) as subtotal
    FROM cliente as cli INNER JOIN    
    comanda as com 
    on cli.cod = com.codCliente
    INNER JOIN vendedor as vend
    ON com.codVendedor = vend.codVendedor 
    INNER JOIN itenscomanda as ic
    ON com.codComanda = ic.codComanda
    INNER JOIN produto as prod
    ON ic.codProduto = prod.codProduto
    GROUP BY com.codComanda
    ORDER BY com.codComanda";
    
    $dados = $conexao->query($query);
    return $listaComandas = $dados->fetchAll(PDO::FETCH_OBJ);
}



//DETALHES DA COMANDA
function listarDetalhesComanda($conexao, $cod){

   $queryComanda = "SELECT 
    com.codComanda,
    cli.nome as nomeCliente,
    com.dataComanda,
    com.status,
    vend.nomeVendedor
    FROM cliente as cli INNER JOIN    
    comanda as com 
    ON cli.cod = com.codCliente
    INNER JOIN vendedor as vend
    ON com.codVendedor = vend.codVendedor
    WHERE com.codComanda = {$cod}";

    $dados = $conexao->query($queryComanda);
    $comanda = $dados->fetch(PDO::FETCH_ASSOC); //array dados comanda 

    $itens = listarItensComanda($conexao, $cod); //array itens Comanda

    $comanda["itens"] = $itens;

    return $comanda;
}


function listarItensComanda($conexao, $cod){

 $queryItens = "SELECT
                i.codComanda,
                p.codProduto, 
                p.sabor,
                i.qtde, 
                p.preco, 
                i.qtde*p.preco as subtotal
            FROM 
                itenscomanda as i 
            INNER JOIN 
                produto as p
            ON i.codProduto = p.codProduto
            WHERE 
                i.codComanda = {$cod}";
 
 $dados = $conexao->query($queryItens);
 return $listaItens = $dados->fetchAll(PDO::FETCH_ASSOC);

}

function cadastrarComanda($conexao, $dataComanda, $codCliente, $codVendedor){
    $query = "INSERT INTO 
              comanda(dataComanda, codCliente, codVendedor)
              VALUES ('{$dataComanda}','{$codCliente}','{$codVendedor}')";
    
    $conexao->query($query);          
}


    
