<?php 

// class Agendador {
//   public function Call($f,$n){

//   }
// }
setcookie("nome", "Rafael Lopes", time() + 3600);

$cookie = $_COOKIE["nome"];
print_r($_COOKIE);
?>