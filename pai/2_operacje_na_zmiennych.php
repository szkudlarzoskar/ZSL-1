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


/*
postinkrementacja $x++ dodaje 1 na koncu
preinkrementacja ++$x dodaje 1 na poczatku
postdekrementacja $x-- odejmuje 1 na kocnu
predekrementacja --$x
*/

$x=2;
echo "<hr>$x"; //2
echo ++$x; //3
echo $x++; //3
echo ++$x, '<br>'; //5

$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x;  //4
echo $y; //3







?>
