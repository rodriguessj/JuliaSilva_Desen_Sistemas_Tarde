<?php
//Função para dimensionar a imagem
function redimensionarImagem($imagem,$largura,$altura){
    //Obtem as dimensões originais da imagem
    list($larguraOriginal,$alturaOriginal) = getimagesize($imagem);

    //Cria uma nova imagem com as dimensões especificadas
    $novaImagem = imagecreatetruecolor($largura,$altura);

    //Cria uma imagem a partir do arquivo original (formato jpeg)
    $imagemOriginal = imagecreatefromjpeg($imagem);

    //Copia e redimensiona a imagem original para a nova imagem
    imagecopyresampled($novaImagem,$imagemOriginal, 0,0,0,0, $largura,$altura,$larguraOriginal,$alturaOriginal);

    //Inicia a saida em buffer para capturar os dados da imagem
    ob_start();
    imagejpeg($novaImagem);
    $dadosImagem = ob_get_clean(); //Essa linha que obtem os dados da imagem no buffer

    //Libera a memoria usada pelas imagens
    imagedestroy($novaImagem);
    imagedestroy($imagemOriginal);

    return $dadosImagem; //Retorna os dados da imagem redimensionada 
}

//conexao com o banco de dados
$host = 'localhost';
$dbname = 'bd_imagem';
$username = 'root';
$password = '';

try{
    //Cria uma nova instancia de pdo para conectar ao banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//Define o modo de erro do pdo para exceções

    if($_SERVER['REQUEST_METHOD']=='POST' && isset ($_FILES['foto'])){
        //Codigo abaixo verifica se nao houve erro no upload da foto
        if($_FILES['foto']['error'] == 0){
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $nomeFoto = $_FILES['foto']['name'];
            $tipoFoto = $_FILES['foto']['type'];

            //redimensiona a imagem para 300x400 pixels
            $foto = redimensionarImagem($_FILES['foto']['tmp_name'], 300, 400);

            //Prepara a instrução sql para inserir os dados do funcionario no banco de dados
            $sql = "INSERT INTO funcionarios (nome, telefone, nome_foto, tipo_foto, foto) VALUES (:nome, :telefone, :nome_foto, :tipo_foto, :foto)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome',$nome);
            $stmt->bindParam(':telefone',$telefone);
            $stmt->bindParam(':nome_foto',$nomeFoto);
            $stmt->bindParam(':tipo_foto',$tipo_foto);
            //O codigo abaixo define o parametro da foto como LARGE OBJECT (lob)
            $stmt->bindParam(':foto',$foto, PDO::PARAM_LOB);

            if($stmt->execute()){
                echo "Funcionário cadastrado com sucesso!";
            }else{
                echo "Erro ao cadastrar o funcionário";
            }
        }else{
            echo "Erro ao fazer upload da foto".$_FILES['foto']['error'];
        }
    }
}catch (PDOException $e){
    echo "Erro. ".$e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Lista Imagens</title>
</head>
<body>
<div class="menu-container">
        <select onchange="location = this.value;">
            <option selected disabled>Menu</option>
            <option value="index.php">Início</option>
            <option value="cadastro_funcionario.php">Cadastrar Funcionário</option>
            <option value="consultar_funcionario.php">Consultar Funcionário</option>
            <option value="visualizar_funcionario.php">Visualizar Funcionário</option>
        </select>
    </div>
    <h1>Lista de Imagens</h1>

    <!--Link para listar funcionarios-->
    <a href = "consultar_funcionario.php">Listar funcionários</a>
</body>
</html>