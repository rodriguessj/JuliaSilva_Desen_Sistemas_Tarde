<?php

//inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

//estabelece conexão
$conexao = conectadb();

//define os novos valores
$nome = "Maria da Silva";
$endereco = "Rua Kalamango, 32";
$telefone = "(41) 5555-5555";
$email = "mariasilva@teste.com";

//define o ID do cliente a ser atualizado
$id_cliente = 3;

//prepara a consulta sql segura
$stmt = $conexao->prepare("UPDATE cliente SET nome=?,endereco=?,telefone=?,email=? WHERE id_cliente=?");

//associa os parametros aos valores da consulta

$stmt->bind_param("ssssi",$nome, $endereco, $telefone, $email, $id_cliente);

//executa a atualização
if($stmt->execute()){
    echo "Cliente atualizado com sucesso!";
}else{
    echo "Erro ao atualizar cliente:".$stmt->error;}

    $stmt->close();
    $conexao->close();?>