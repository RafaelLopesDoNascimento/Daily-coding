<?php 



class Matriz {
  public function Call($arr) {
$newMatriz = [];



foreach ($arr as $value) {
  
  $write = $value;
array_filter($arr, $write);
      

    echo  "<br><br>Fim do for com value sendo: $value<br><br>";
  }

}

// print_r($newMatriz);

}
// }

$matrizTeste = new Matriz;

$matrizTeste->Call([1,2,3]);

$a = array(1,2,3);
echo "product(a) = " . array_product($a) . "<br>";
echo "product(array()) = " . array_product(array()) . "\n";
?>