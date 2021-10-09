<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Początek strony</h3>
    <?php
    include './3_1.php';
    include_once './3_1.php';
   // include './3_142342.php'; warning ale kod dalej działa (zła nazwa pliku)

echo "<br>";
require './3_1.php';
require_once './3_1.php';
// require './3_132.php'; //eror nic nie pokzauje po tym
    ?>
   <h3>Koniec strony </h3>
</body>
</html>
