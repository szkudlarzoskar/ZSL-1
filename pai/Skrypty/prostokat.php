<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>Prostokąt</h3>
    <form method="post">
<input type="text" name="sidea" placeholder="Podaj bok a">
<input type="text" name="sideb" placeholder="Podaj bok b">
<input type="submit" value="oblicz">
</form>

<?php
if(!empty($_POST['sidea']) && !empty($_POST['sideb'])){
$sidea=$_POST['sidea'];
$sideb=$_POST['sideb'];
$area=$sidea*$sideb;
$circle=2*$sidea+2*$sideb;
echo <<< RESULT
<hr>
Pole prostokąta wynosi : $area cm<sup>2</sup><br>
Obwód prostokątu wynosi : $circle cm
RESULT;

}

else{
    echo "Wypełnij wszystkie pola";

}
?>
</body>
</html>
