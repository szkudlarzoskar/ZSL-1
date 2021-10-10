<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
<h1>Prostokąt</h1>

<form class="" action="" method="post">
  <input type="number" name="boka" value="" placeholder="Podaj długość boku a"><br><br>
  <input type="number" name="bokb" value="" placeholder="Podaj długość boku b"><br><br>
  <input type="submit" name="" value="Zatwierdź"><br><hr>

</form>

<?php
if (!empty($_POST['boka'])&&!empty($_POST['bokb'])) {
  $a=$_POST['boka'];
  $b=$_POST['bokb'];
  $obwod=$a*2+$b*2;
  $pole=$a*$b;
echo "Pole : $pole"."<br><br>";
echo "Obwód : $obwod";
}else {
  echo "Wypełnij wszystkie pola !";
}


 ?>
  </body>
</html>
