<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <h2>Funcionário</h2>
        <!--Formulario para cadastrar funcionario-->
        <form action="salvar_funcionario.php" method="POST" enctype="multipart/form-data">

        <!--Campo para inserir o nome do funcionario-->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <!--Campo para inserir o telefone do funcionario-->
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br>

        <!--Campo para fazer upload da foto do funcionario-->
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" required><br>

        <!--Botão para enviar o formulario-->
        <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>