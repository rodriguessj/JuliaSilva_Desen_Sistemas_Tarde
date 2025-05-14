<?php

session_start();
require_once 'conexao.php';


if(!isset($_SESSION['id_usuario'])){
   header("Location: login.php");
   exit();

   //Obtendo o nome do perfil do usuario logado
   $id_perfil = $_SESSION['perfil'];
   $sqlPerfil = "SELECT nome_perfil FROM perfil WHERE id_pefil = :id_perfil";
   $stmtPerfil = $pdo->prepare($sqlPerfil);
   $stmtPerfil->bindParam(':id_perfil',$id_perfil);
   $stmtPerfil->execute();
   $perfil = $stmtPerfil->fetch(PDO::FETCH_ASSOC);
   $nome_perfil = $perfil['nome_perfil'];

   //Definição das permissões por perfil
   $permissoes = [
    1 => ["Cadastrar"=>["cadastro_usuario.php","cadastro_perfil.php","cadastro_cliente.php","cadastro_fornecedor.php","cadastro_produto.php","cadastro_funcionario.php"],
          "Buscar"=>["buscar_usuario.php","buscar_perfil.php","buscar_cliente.php","buscar_fornecedor.php","buscar_produto.php","buscar_funcionario.php"],
          "Alterar"=>["alterar_usuario.php","alterar_perfil.php","alterar_cliente.php","alterar_fornecedor.php","alterar_produto.php","alterar_funcionario.php"],
          "Excluir"=>["excluir_usuario.php","excluir_perfil.php","excluir_cliente.php","excluir_fornecedor.php","excluir_produto.php","excluir_funcionario.php"]],

    2 => ["Cadastrar"=>["cadastro_cliente.php"],
          "Buscar"=>["buscar_cliente.php","buscar_fornecedor.php","buscar_produto.php"],
          "Alterar"=>["alterar_cliente.php","alterar_fornecedor.php"]],          
   ]
}

?>