
<?php
//comparison operator
$n1 = 10;
$n2 = 20;
//  $equal = $num1 == $num2; 
var_dump($n1 == $n2); //bool(false) var dump is used for the representing the data variable 
// identical
echo "<br>";
var_dump($n1 === $n2);
echo "<br>";

//spaceship
echo ($n1 <=> $n2); // returns -1
echo "<br>";
$n3 = 15;
$n4  = 10;
echo ($n3 <=> $n4); // returns 1
echo "<br>";

$n5 = 10;
echo ($n4 <=> $n5); // returns 0
echo "<br>";
?>