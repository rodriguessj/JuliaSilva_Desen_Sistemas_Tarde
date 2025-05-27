<?php
require_once ('conecta.php'); 

//Obtem os dados enviados pelo formulario
$evento = $_POST['evento'];
$descricao = $_POST['descricao'];
$imagem = $_FILES['imagem']['tmp_name'];
$tamanho = $_FILES['imagem']['size'];
$tipo = $_FILES['imagem']['type'];
$nome = $_FILES['imagem']['name'];

//Verifica se o arquivo foi enviado corretamente
if(!empty($imagem) && $tamanho>0){
    //LÊ o conteudo do arquivo
    $fp = fopen($imagem,"rb");
    $conteudo = fread($fp,filesize($imagem));
    fclose($fp);

    //Protege contra problemas de caracteres no sql
    $conteudo = mysqli_real_escape_string($conexao, $conteudo);

    //Insere os dados no banco de dados
    $queryInsercao = "INSERT INTO tabela_imagem(evento, descricao, nome_imagem, tamanho_imagem, tipo_imagem,imagem) VALUES('$evento','$descricao','$nome','$tamanho','$tipo','$conteudo')";

    $resultado = mysqli_query($conexao,$queryInsercao);

    //Verifica se a inserção foi bem sucedida
    if($resultado){
        echo 'Registro inserido com sucesso!';
        header('Location: index.php');
        exit();
    }else{
        die ("Erro ao inserir no banco: ".mysqli_error($conexao));
    }
    }else{
    echo "Erro: Nenhuma imagem foi enviada";
}
?>