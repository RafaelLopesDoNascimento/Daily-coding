<?php 

// $string = "teste";

// $letra = [];
// for ($i=0; $i < strlen($string); $i++) { 
//   array_push($letra, $string[$i]);
//   print_r( $letra) . "<br>";
// }
// print_r ($letra);
// $palavra = implode(" , ", $letra);
// echo "esta é a $letra"




function wordBreak($s, $wordDict) {
  $dictionary = array_flip($wordDict); // Create a dictionary for faster lookup
  $results = array();

  function backtrack($start, $sentence) use (&$results, $s, $dictionary) {
      if ($start === strlen($s)) {
          $results[] = trim($sentence);
          return;
      }

      for ($end = $start + 1; $end <= strlen($s); $end++) {
          $word = substr($s, $start, $end - $start);
          if (isset($dictionary[$word])) {
              backtrack($end, $sentence . $word . ' ');
          }
      }
  }

  backtrack(0, ''); // Start the backtracking from the beginning of the string

  if (empty($results)) {
      return null; // No valid sentence found
  } else {
      // Explode the first result to get the list of words
      return explode(' ', trim($results[0]));
  }
}

// Example usage:
$wordDict1 = ["quick", "brown", "the", "fox"];
$string1 = "thequickbrownfox";
$result1 = wordBreak($string1, $wordDict1);
print_r($result1); // Output: Array ( [0] => the [1] => quick [2] => brown [3] => fox )

$wordDict2 = ["bed", "bath", "bedbath", "and", "beyond"];
$string2 = "bedbathandbeyond";
$result2 = wordBreak($string2, $wordDict2);
print_r($result2); // Output: Array ( [0] => bed [1] => bath [2] => and [3] => beyond )

?>