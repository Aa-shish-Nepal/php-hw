<?php 
$number=125;
$reverse = 0;

while($number !=0){
	$digit=$number%10;
	$reverse=$reverse*10 + $digit;
	$number=(int)$number/10;
}

echo $reverse;
?>