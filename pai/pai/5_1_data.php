<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(!empty($_GET['name'])&& !empty($_GET['age'])&& !empty($_GET['nationality'])){
  $x= strtolower($_GET['name']);
  $y= strtolower($_GET['nationality']);
  echo "Imię : ".ucfirst($x)."<br>";
  echo "Narodowość : ".ucfirst($y)."<br>";
   echo "Wiek : ".$_GET['age']." lat <br>";
}else{
    echo "Wypełnij wszystkie pola! <br>";
}
    ?>
</body>
</html>