<?php
 echo 'ZSŁ <br>';
 echo 'ZSŁ <br>';


 $name='Janusz';
 echo 'Imię: $name<br>'; //imię: $name
 echo "Imię: $name<br>"; //imię: Janusz

//Konkatenacja
 echo "Janusz"." Kowalski";

 //typy danych
 //całkowity
 $calkowita=10;
 $bin=0b101; //5
 $oct=011; //9
 $hex=0x11; //17
 echo "<br>";
 echo $hex ;
 echo "<br>";


 //zmiennoprzecinkowy
 $x=10.5;

 //logiczny
 $prawda= true;
 $fałsz= false; // w nazwach zmiennych nie należy używać polskich znaków
 echo $prawda ; //1
 echo $fałsz ; // nic nie wyświetli

 //składnia heredoc
 echo <<< E
 <hr>Twoję imię : $name<br>
 Poznań<br>
 ZSŁ<hr>
E;

$text = <<< E
 <hr>Twoję imię : $name<br>
 Poznań<br>
 ZSŁ<hr>
E;
echo $text;

//składnia nowdoc
echo <<< 'E'
 <hr>Twoję imię : $name<br>
 Poznań<br>
 ZSŁ<hr>
E;

$surname='Nowak';
echo "\$name $surname"; //$name Nowak

?>
