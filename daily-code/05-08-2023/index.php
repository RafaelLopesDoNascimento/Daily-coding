<?php 

$string = 'dir\n\tsubdir1\n\tsubdir2\n\t\tfile.ext';

class Daily {
public function GetStr($str) {
  echo "$str <br>";
}

  public function Str($str) {
    for ($i=0; $i < strlen($str); $i++) { 
      if (substr($str, $i,1)  === "\\" ||   substr($str, $i - 1, 1) === "\\") {
    echo " ";
      } else {
        echo substr($str, $i,1) ;
      }
      
    }
  }
}

echo strlen($string) . "<br>";

echo substr($string, 8 - 1, 1) . "<br>";
$teste = new  Daily;
$teste->GetStr($string);
$teste->Str($string);


?>