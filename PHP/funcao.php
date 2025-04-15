<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função PHP</title>
</head>
<body>
    <?php
       echo $name="Julia Rodrigues Silva";
       echo "<br>";
       echo $length=strlen($name);
       echo "<br>";
       echo $cmp=strcmp($name, "Brian Le");
       echo "<br>";
       echo $index=strpos($name, "e");
       echo "<br>";
       echo $firts=substr($name,9,5);
       echo "<br>";
       echo $name=strtoupper($name);
    ?>

    <?php
       $cidade="Joinville";
       $estado="SC";
       $idade="174";
       $frase_capital="A cidade de $cidade tem a maior população de $estado";
       $frase_idade="$cidade tem mais de $idade anos";
       echo "<h3>$frase_capital</h3>";
       echo "<h4>$frase_idade</h4>";
    ?>