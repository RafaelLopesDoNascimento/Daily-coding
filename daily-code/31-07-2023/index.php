<!-- Existe uma escada com N degraus e você pode subir 1 ou 2 degraus por vez. Dado N, escreva uma função que retorne o número de maneiras únicas de subir a escada. A ordem das etapas é importante.

Por exemplo, se N for 4, existem 5 maneiras exclusivas:

1, 1, 1, 1
2, 1, 1
1, 2, 1
1, 1, 2
2, 2 -->

<?php 

// class Escada {

//   public $degrauUm = 1;
//   public $degrauDois = 2;
  
//   public function Subir($degraus) {
//     $arr = [];
//     $posicao = 0;
//   while ($degraus > $posicao) {
//    $posicao += $this->degrauUm;
// array_push($arr, $this->degrauUm);
//   }
 
// for ($i=0; $i < count($arr); $i++) { 
//   if (array_sum($arr) <= $degraus) {
//     $arr[$i] = $this->degrauDois;
//     foreach ($arr as $value) {
//      echo $value . ", ";
//     }
//   } else {
//     echo "<br>" . $arr[$i] . "<br>";
//     foreach ($arr as $value) {
// //  $value = $this->degrauUm;
//  echo "$value,  e o indice é " .  $arr[$i] . "<br>";
// }
// echo "Atruibuido <br>";
//   }
// }
 
//   }
// }

// $escada =  new Escada;

// $escada->Subir(4);


function countWaysToClimbStairs($n) {
  if ($n <= 0) {
      return 0;
  } elseif ($n == 1) {
      return 1;
  } elseif ($n == 2) {
      return 2;
  }

  $ways = array();
  $ways[0] = 0; // não há maneira de subir 0 degraus
  $ways[1] = 1; // uma maneira de subir 1 degrau
  $ways[2] = 2; // duas maneiras: 1+1 ou 2

  for ($i = 3; $i <= $n; $i++) {
      // O número de maneiras de subir i degraus é a soma das maneiras de subir (i-1) e (i-2) degraus
      $ways[$i] = $ways[$i - 1] + $ways[$i - 2];
  }

  return $ways[$n];
}

$n = 4;
$ways = countWaysToClimbStairs($n);
echo "Número de maneiras únicas para subir $n degraus: $ways";
?>
