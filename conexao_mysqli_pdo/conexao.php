<?php
//Habilita relatório detalhado de erros no MySqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

 /**
  * Função para conectar ao banco de dados
  * Retorna um objeto de conexão MySQLi ou interrompe o script em caso de erro.
  */

  function conectadb(){
    //Configuração do banco de dados
$usuario = "root"; //nome de usuario do banco
$senha = ""; //senha do banco
$banco = "empresa"; //nome do banco de dados
$endereco = "localhost"; //endereço do servidor MySQL
  

  try{
    //Criação da conexão
    $con = new mysqli($endereco, $usuario, $senha, $banco);

    $con->set_charset("utf8mb4");
    return $con;
  } catch (Exception $e){
    die("Erro na conexão:".$e->getMesage());
  }
}
  ?>