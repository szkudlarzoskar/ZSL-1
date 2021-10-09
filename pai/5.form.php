<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Dane użystkownika</h3>

<form action="5_1_data.form.php" method="">
  <input type="text" name="name" placeholder="Podaj imię"><br><br>
  <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
  <input type="color" name="color" placeholder="Podaj kolor w RGB"><br><br>
  <input type="submit" value="Zatwierdź dane"><br><br>
</form>

<?php
if(!empty($_GET['name'])&& !empty($_GET['surname'])&& !empty($_GET['color'])){

    echo <<< E
    Imię i nazwisko: $_GET[name]<br>  $_GET[surname]<br> $_GET[color]<br>
    E;
}else{
    echo "Wypełnij wszystkie pola! <br>";
}

?>

</body>
</html>
