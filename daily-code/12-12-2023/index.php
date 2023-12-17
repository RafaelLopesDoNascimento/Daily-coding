<!-- Good morning! Here's your coding interview problem for today.

This problem was asked by Google.

Given the head of a singly linked list, swap every two nodes and return its head.

For example, given 1 -> 2 -> 3 -> 4, return 2 -> 1 -> 4 -> 3. -->
<?php

class Teste {
  private $numero;


  public function retorno() {
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
      $valor = $_POST["numero"];
      
      if ($valor === "") {
      return;
      } else {      
         $this->numero =  $valor;
        $arr = explode(", ", $this->numero);
        print_r( $arr);
        return $arr;
      }
    } else {
    
    }
    
  }
  
  public function calculo($arr) {
    if ($arr) {
      for ($i=0; $i < count($arr); $i++) { 
        if ($i % 2 != 0 && ctype_digit($arr[$i])) {
          $primeiroElemet = $arr[$i - 1];
          $segundoElement = $arr[$i];
          $arr[$i] = $primeiroElemet;
          $arr[$i - 1] = $segundoElement;
        } else if(!ctype_digit($arr[$i])){
          echo("Não é um número <br>");
          break;   
        } else {          
        }
           }
   print_r($arr);
          } else {
echo ("Coloque numeros com virgula como divisor entre eles:");
    }
  }
}

$testeObjeto = new Teste;
$testeObjeto->calculo($testeObjeto->retorno());



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Code</title>
</head>

<body>
  <h1>Daily Code</h1>
  <form action="index.php" method="post">
    <label for="">Valores:</label>
    <input type="text" name="numero" id="numero">
    <input type="submit" value="Send" name="send">
  </form>
</body>

</html>