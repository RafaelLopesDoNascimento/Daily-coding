<?php 

$arr = "ok teste tes01 ola lorem inputs 99";

$newArr = explode(" ", $arr);
$another = array_rand($newArr);
echo "A palavra escolhida foi: " . $newArr[$another] . " com indice igual a: " . $another;


?>