<?php
  $dias=array('domingo','segunda','terça','quarta','quinta','sexta','sabado');
  echo $dias[1]."<br/>";
  print_r($dias);
  echo "<br/>";
  var_dump($dias);
?>

<?php
      echo "<h2 align='center'>
            Julia Silva
            </h2>";
?>

<?php
  $estados=array("PR","SC","RS","SP","RJ","MG","BA","RN","AM");
  echo "ORIGINAL: ";
  print_r($estados);
  echo "<hr/>STRTOLOWER:  Converte uma string para minúsculas<br/>";
  for($i=0; $i<count($estados); $i++){
    $estados[$i]=strtolower($estados[$i]);
  }

  echo "STRTOLOWER: ";print_r ($estados);
  echo "<hr/>SHIFT: Retira o primeiro elemento de um array<br/>";
  $rotaciona=array_shift($estados);
  echo "SHIFT: ";
  print_r($estados);
  echo "<hr/>POP: Extrai um elemento do final do array<br/>";
  array_pop($estados);
  echo "POP: "; 
  print_r($estados);
  echo "<hr/>PUSH: Adiciona um ou mais elementos no final de um array<br/>";
  array_push($estados, "pr");
  echo "PUSH: ";
  print_r($estados);
  echo "<hr/>REVERSE: Retorna um array com os elementos na ordem ineversa<br/>";
  $inverso= array_reverse($estados);
  echo "REVERSE: "; 
  print_r($inverso);
  echo "<hr/>SORT: Ordena um array<br/>";
  sort($estados);
  echo "SORT: "; 
  print_r($estados);
  echo "<hr/>SLICE: Extrai uma parcela de um array<br/>";
  $dividir = array_slice($estados,1 , 2);
  echo "SLICE: ";
  print_r ($dividir); echo "<br/>";
  ?>