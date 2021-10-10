<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
<h1>Kwadrat</h1>

<form class="" action="" method="post">
  <input type="number" name="bok" value="" placeholder="Podaj długość boku "><br><br>
  <input type="submit" name="" value="Zatwierdź"><br><hr>

</form>

<?php
if (!empty($_POST['bok'])) {
  $a=$_POST['bok'];
  $obwod=$a*4;
  $pole=pow($a,2);
echo "Pole : $pole"."<br><br>";
echo "Obwód : $obwod";
}else {
  echo "Wypełnij wszystkie pola !";
}


 ?>
  </body>
</html>
