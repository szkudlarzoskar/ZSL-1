<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


if (!isset($_POST['osoby'])&& !isset($_POST['przycisksredniwiek'])) {


echo <<< iloscosobwrodzinie
<h3>Ilość osób w rodzinie<h3>
<form id="location "method="post">
<input type="text" name="osoby" placeholder="Podaj ilość osób" > <br> <br>
<input type="submit" value="Zatwierdź"> <br> <br>
</form>
iloscosobwrodzinie;
}

?>
<?php

     if (!empty($_POST['osoby'])) {
       echo "<h3>Ilość osób w rodzinie : $_POST[osoby]</h3>"."<br>";
       echo <<< wiekwrodzinieform
       <form method="post">
       wiekwrodzinieform;
       for ($i=1; $i <= $_POST['osoby'] ; $i++) {
         echo "<input type=\"number\" name=\"wiek$i\" placeholder=\"Podaj wiek osoby $i\"><br><br>";
       }
       echo <<< wiekwrodzinieform2
        <input type="submit" name="przycisksredniwiek" value="Oblicz średni wiek">
        </form>
       wiekwrodzinieform2;
     }


     if (isset($_POST['przycisksredniwiek'])) {
       $sredniwiek=0;




       foreach ($_POST as $key => $value) {
         echo "$key : $value  <br><br>";

       if ($key != "przycisksredniwiek") {
         $sredniwiek=$sredniwiek+$value;



       }
}
     echo <<< B
     średni wiek : $sredniwiek <br><br>
  <a href header("Location:7.cwiczenia.php#location")>Cofnij</a>

B;
}





      ?>
  </body>
</html>
