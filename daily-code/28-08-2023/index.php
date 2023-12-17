<?php 

// Dada uma matriz de números inteiros onde cada número inteiro ocorre três vezes, exceto um número inteiro, que ocorre apenas uma vez, encontre e retorne o número inteiro não duplicado.

// Por exemplo, dado [6, 1, 3, 3, 3, 6, 6], retorne 1. Dado [13, 19, 13, 13], retorne 19.


$arr = [6, 1, 3, 3, 3, 6, ];
$newArr = [];
$anotherArr = [];
foreach ($arr as $value) {

 for ($i=0; $i < count($arr); $i++) { 
  if ($value === $arr[$i] && !in_array($arr[$i], $newArr)) {
    echo "$value é igual a " . $arr[$i] . "<br>";

    array_push($newArr,$arr[$i]);
  }
  else {

    echo "$value <br>";
  }
 }
}
echo "Novo array abaixo: <br><br>";
print_r($newArr);
foreach ($newArr as $key) {
  echo "Este é do new array: $key <br>";
}
echo in_array($arr[0], $newArr, 4)
?>