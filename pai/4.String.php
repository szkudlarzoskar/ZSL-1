<?php
$text= <<< T
ZSŁ - Zespół
Szkół
Łączności
T;

echo "$text<br>"; //wysiwetla zmienna w jednej lini
echo nl2br($text); //wyswietla zmienna w cieciach

$name="janUsz";
//zamiana liter na małe 
echo "<br>";
echo $name = strtolower($name), "<br>";

//zamiana na duze litery 
echo $name = strtoupper($name),"<br>";

$data="januSZ koWALski";

//zamiana pierwsza litere na duza 

echo ucfirst($data),"<br>";

//zamienia wszystkie pierwsze litery na duże 

echo ucwords($data),"<br>";

$lorem="Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda obcaecati animi necessitatibus culpa quibusdam repellendus sit. Nisi placeat suscipit veniam, non est voluptatibus nostrum adipisci nesciunt, ad, maxime laborum voluptates!";
 echo"<hr> $lorem<hr>";
 //$col=wordwrap($lorem, 30 ,"text");
 $col=wordwrap($lorem, 30 ,"<br>");
 //$col=wordwrap($lorem, 30 ,"<hr>");
echo $col;

//czyszczenie zawartosci bufora

ob_clean(); //czyści ekran 

// usuwanie białych znaków
$name="Janusz";
$name1=" Janusz  ";

echo "Długość \$name: ".strlen($name)."<br>"; //6
echo "Długość \$name1: ".strlen($name1)."<br>"; //9

echo "Długość \$name1: ".strlen(ltrim($name1))."<br>"; //8
echo "Długość \$name1: ".strlen(rtrim($name1))."<br>"; //7
echo "Długość \$name1: ".strlen(trim($name1))."<br>"; //6

//przeszukiwanie ciagow znakow 

echo strstr("janusz@gmail.com","@"); // szuka @
echo strstr("janusz@gmail.com","G"); //tylko wielkie G
echo stristr("janusz@gmail.com","G"); //wszystkie litery G

//substr
$name="Janusz";
echo substr($name,2); //nusz 
echo substr($name,2,3 ); //nusv(od 2, 3 znaki )
echo substr($name,-2); //sz
echo substr($name,-2,1); //s

echo substr(strstr("janusz@gmail.com","@"),1); 

?>