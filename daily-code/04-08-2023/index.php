<?php 

class Blog {
  private $Nids;
  private $log = [];

  public function Record($order_id) {
    array_push($this->log, $order_id);
    print_r($this->log);
    
    echo end($this->log) .  "<br>";
  }
  public function Get_last($a) {
    $confirm = false;
    echo "<br>";
    while ($confirm = true) {
      if ($a >= end($this->log)) {
      echo "Seu numero é: " . $a . ". Este é o ultimo numero menor que o seu: " . end($this->log);
       $confirm = true;
       break;
      } else {
        array_pop($this->log);
        $confirm = false;
      }
      
    }
  }

 
 }

$teste = new Blog;

$teste->Record(2);
$teste->Record(5);
$teste->Record(8);
$teste->Record(40);
$teste->Get_last(20);


//     array_pop($fim);
// print_r($this->log);
// $confirm = false;
//  while ($confirm == true) {

//   if ($a <= end($this->log)) {
//     echo $a . " é menor que " . $this->log;
//     $confirm = true;
//     break;
//   } else {
//     echo "sera removido " . $this->log. "<br>";
//    array_pop($this->log);
//    $confirm = false;
//   }
  
//  }
// }
// }
?>