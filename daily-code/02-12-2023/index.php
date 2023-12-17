<?php 
// Good morning! Here's your coding interview problem for today.

// This question was asked by Apple.

// Given a binary tree, find a minimum path sum from root to a leaf.

// For example, the minimum path in this tree is [10, 5, 1, -1], which has sum 15.



class Tree {
private $arr;

public function GetIt() {
if (isset($_POST["inputValue"])) {
echo("<h2>Existe<h2>");
    $valor = $_POST["inputValue"];
    $valorEmArray = explode(", ",$valor);
    $this->arr = $valorEmArray;
  } else {
    echo("<h2>Não existe<h2>");
    $this->arr = [];
  }
  return $this->arr;
        }          
        public function CrossTheTree($arr) {
        $ValorIncremental = 0;
        $situacao = false;

        for ($i=0; $i < count($arr); $i++) { 
          floatval($arr[$i]);
           if (is_numeric($arr[$i])) {
          $ValorIncremental=$ValorIncremental + $arr[$i]; 
        } else { echo("Você inseriu um caracter inválido");
          $situacao=true; break; 
         } 
        } if ($situacao===false) { 
          echo("<br>" . $ValorIncremental . "<br>");
          } else {
          echo("<br>Impossivel de ver a soma<br>");
          }
          }
          }

          $teste = new Tree;
          $teste->CrossTheTree($teste->GetIt())
          ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Code</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="">Send a value:</label>
    <input type="text" name="inputValue" id="inputValue">
    <input type="submit" value="Send">
  </form>
</body>

</html>