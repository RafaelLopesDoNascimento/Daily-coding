<?php 
// Encontrar o numero em comun

$m = [0,5,4,8,9];
$n = [2,7,45,67,8,10,85,9,35];

class No {
  public function EncontrarOno($arr1, $arr2) {

    foreach ($arr1 as $value) {
      for ($i=0; $i < count($arr2); $i++) { 
       
        if ($value == $arr2[$i]) {
         echo $value . " é igual a " . $arr2[$i] . "<br>";
         continue;
        } else {
        //  echo "Nada encontrado <br>";
        }
      }
      
    }
  }
}

$teste = new No;
$teste->EncontrarOno($m, $n)

?>