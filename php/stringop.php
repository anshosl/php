<?php
$text = "OpenSense labs Bhopal" ;
echo "The total length of the string is ",strlen($text); //21
echo "<br>";

echo "The total number of words in the string is ",str_word_count($text); //3
echo "<br>";

echo "Reverse of the string is ",strrev($text); // lapohB sbal esneSnepO
echo "<br>";

echo str_replace("Bhopal","Delhi",$text); 
?>