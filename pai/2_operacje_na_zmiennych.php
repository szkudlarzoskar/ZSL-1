<?php
echo PHP_VERSION , "<br>"; //7.4.8
echo 2**10, "<br>"; //potęgowanie

$x=1;
$y=10;
echo $x<=>$y; //jesli lewa wieksza 1 , rowne 0 , prawwa -1

//równe / identyczne 
$x=1;
$y=1.0;

echo "<br>".gettype($x); //integer
echo "<br>".gettype($y); //double

if($x == $y) {
    echo "<br>", "równe","<br>";
}else {
    echo "różne","<br>";
}

if($x === $y) {
    echo "identyczne";
}else {
    echo "różne";
}



?>