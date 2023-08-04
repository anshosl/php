<?php
$eng = 80;
$hin = 90;
$phy = 70;
$che = 75;
$math = 39;
$total = $eng + $hin + $phy + $che + $math;
$per = $total/5;
echo $per;
 if ($per>90 and $per<=100) {
    echo "<br>Grade A";
 }
 elseif($per> 80 and $per <=90){
    echo "<br>Grade B";
 }

 elseif($per> 70 and $per <=80){
    echo "<br>Grade C";
 }
 elseif($per>60 and $per <=70){
    echo "<br>Grade D";
 }
 else {
    echo "<br>Need improvement";
 }

?>