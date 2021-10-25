<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kartkówka</title>
</head>
<body>

<h3>Kacper Woźniak 3pi2t</h3>
    <?php
//gr1 utwórz plik o nazwie swoje nazwisko.php utwórz w tym pliku , utwórz w tym pliku nagłówek 3 stopia z swoim imieniem nazwiskiem i klasa .Utworz formularz z 2 polami długosc boku a i dlugosc boku b .formularz bedzie wyslany do tej samej strony metoda get.jak formularz zostanie prawidlowo wyslany , ma zniknac wyswietl wtedy wynik obliczenia pola prostokata pamietaj ze kwadrat musi byc w indeksie gorym umorzliwij cofniecie do strony glownej w przypadku blednych danych formularzu wyswietl komuniikat o bledzie.wynik zaokroglij do 2 miejsc po przecinku
    
echo <<< E
<form action="./Woźniak.php" method="get">
<input type="text" name="boka" placeholder="Podaj bok A"><br><br>
<input type="text" name="bokb" placeholder="Podaj bok B"><br><br>
<input type="submit" name="zatwierdz" value="Zatwierdź">
</form>
E;

//ob_clean();

    if(isset($_GET['boka'])&&($_GET['bokb']));{
    $a=$_GET['boka'];
    $b=$_GET['bokb'];
    $pole=$a*$b;

    
    }
    echo "Pole : ".$pole;

       echo <<< OBIEKT
               <hr>
                   <a href= header('location:./wozniak.php#location')>Strona głowna </a>
    OBIEKT;
    
    
    ?>


</body>
</html>