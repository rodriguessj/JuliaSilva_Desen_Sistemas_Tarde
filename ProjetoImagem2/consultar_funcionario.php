<?php
    //conexao com o banco de dados
$host = 'localhost';
$dbname = 'bd_imagem';
$username = 'root';
$password = '';

try{
    //Cria uma nova instancia de pdo para conectar ao banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//Define o modo de erro do pdo para exceções

    //Recupera todos os funcionarios do banco de dados
    $sql = "SELECT id, nome FROM funcionarios";
            $stmt = $pdo->prepare($sql);//Prepara a instrução sql para execução
            $stmt->execute();//Executa a instrução
            $funcionarios = $stmt->fetchAll(PDO::FETCH_ASSOC);//Busca todos os resultados com uma matriz associativa

            //Verifica se foi solicitado a exclusao de um formulario
            if($_SERVER['REQUEST_METHOD'] =="POST" && isset($_POST['excluir_id'])){
                $excluir_id = $_POST['excluir_id'];
                $sql_excluir = "DELETE FROM funcionarios WHERE id = :id";
                $stmt_excluir = $pdo->prepare($sql_excluir);
                $stmt_excluir->bindParam(':id',$excluir_id, PDO::PARAM_INT);
                $stmt_excluir->execute();

                //Redireciona para evitar o reenvio do formulario
                header("Location: ".$_SERVER['PHP_SELF']);
                exit();
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
    <title>Consulta Funcionário</title>
</head>
<body>
   <h1>Consulta de Funcionário</h1> 
   <ul>
    <?php foreach ($funcionarios as $funcionario):?>
        <li>
            <a href = "vizualizar_funcionario.php?id<? $funcionario['id'] ?>">
                <?=htmlspecialchars($funcionario['nome'])?>
            </a>

            <form method="POST" style="display:inline;">
                <input type="hidden" name="excluir_id" value="<?$funcionario['id']?>">
                <button type="submit">Excluir</button>
            </form>
        </li>
        <?php endforeach;?>
   </ul>
</body>
</html>
