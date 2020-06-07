<?php
 

function listarVendedores($conexao){
      //SELECIONAR TODOS OS DADOS DOS CLIENTES E SALVAR NA VARIAVEL LISTACLIENTES
      $dados = $conexao->query('SELECT * FROM vendedor');
      return $listaVendedores = $dados->fetchAll(PDO::FETCH_OBJ);  
}


function localizarVendedorPorId($id, $conexao){
    $dados = $conexao->query("SELECT * FROM vendedor WHERE codVendedor={$id}");
    return $dadosVendedores = $dados->fetch(PDO::FETCH_ASSOC);  
}


function CadastrarVendedor($conexao, $nome, $comissao ){
   $query ="INSERT INTO vendedor (nomeVendedor, comissaoVenda) ";
   $query .="VALUES('{$nome}','{$comissao}')";

   //echo($query);
   return $conexao->query($query);
}


function AtualizarVendedor($conexao, $cod, $nome, $comissao){
    $query = "UPDATE vendedor SET nomeVendedor='{$nome}', comissaoVenda='{$comissao}' WHERE codVendedor=$cod  ";
   //echo ($query);
    return $conexao->query($query);
}


function DeletarVendedor($cod, $conexao){
try {
    $query = "DELETE FROM vendedor WHERE codVendedor={$cod}";
    return $conexao->query($query);
    echo($query);
} catch ( PDOException $e) {
    echo '<p>'.$e->getMessege() .'</p>';
}    
}

?>



