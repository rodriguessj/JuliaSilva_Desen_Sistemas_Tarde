<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada PHP</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
        }
        th,td{
            border-style: solid;
            width:50px;
        }
    </style>
</head>
<body>
    <table>
        <?php
            for ($l=1; $l<=10; $l++)
            {
                echo "<tr>";
                for($c=1; $c<=10;$c++){
                    $resultado = $l * $c;
                    echo "<td> $l x $c = $resultado</td>";
                }
                echo "<tr/>";
            }
        ?>
    </table>

    <?php
      echo "<h2 align='center'>
            Julia Silva
            </h2>";
?>

</body>
</html>