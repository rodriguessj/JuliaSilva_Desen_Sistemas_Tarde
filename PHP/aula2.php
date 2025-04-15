<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>
<body>
    <?php
      //Função usada para definir fuso horário padrao
      date_default_timezone_set('America/Los_Angeles');
      //Manipulando HTML e PHP
      $data_hoje=date ("d/m/Y",time());
    ?>
    <p align="center">Hoje é dia <?php echo $data_hoje; ?>
</p>
<?php
      echo "<h2 align='center'>
            Julia Silva
            </h2>";
    ?>
</body>
</html>