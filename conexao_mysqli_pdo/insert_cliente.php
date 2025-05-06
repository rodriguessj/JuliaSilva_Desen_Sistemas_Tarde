<?php

require_once "conexao.php";

$conexao = conectadb();

//definição dos valores para inserção
$nome = "Julia Rodrigues Silva";
$endereco = "Rua Kalamango, 32";
$telefone = "(41) 5555-5555";
$email = "joaosilva@teste.com";

$stmt = $conexao->prepare("INSERT INTO cliente(nome, endereco, telefone, email) VALUES (?,?,?,?)");

//associa os parametros aos valores da consulta
$stmt->bind_param("ssss",$nome, $endereco, $telefone, $email);

//executa a inserção
if($stmt->execute()){
    echo "Cliente adicionado com sucesso!";
}else{
    echo "Erro ao adicionar cliente:".$stmt->error;
}

$stmt->close();
$conexao->close();?>