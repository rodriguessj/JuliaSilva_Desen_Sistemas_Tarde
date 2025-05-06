<?php

  require_once "conexao.php";

  $conexao = conectadb();

  $id_cliente = 4;

  $stmt = $conexao->prepare("DELETE FROM cliente WHERE id_cliente=?");

  $stmt->bind_param("i",$id_cliente);

  if($stmt->execute()){
    echo "Cliente removido com sucesso!";
}else{
    echo "Erro ao remover cliente:".$stmt->error;}

    $stmt->close();
    $conexao->close();
    ?>