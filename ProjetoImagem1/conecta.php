<?php
//Definição das credenciais de conexao ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armazena_imagem";

//Criando a conexao usando MySQLi
$conexao = new mysqli($servername, $username, $password, $dbname);

//Verificando se houve erro na conexão
if($conexao->connect_error){
    die("Falha na conexão: ".$conexao->connect_error);
}
?>