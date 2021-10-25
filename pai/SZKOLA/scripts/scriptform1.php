<?php
if (!empty($_POST['name']) &&!empty($_POST['color'])) {
  require_once '../functions/functionform1.php';
  //echo text();
  echo name('Krystyna').'<hr>';
  $color=$_POST['color'];
  echo "<div style=\"color: $color\">";

//echo 'Imię: '.name($_POST['name']);
echo 'Imię: '.validateString($_POST['name'],$_POST['lenght'],$_POST['color'],$_POST['nationality'])."<br>";
echo 'Narodowość: '.nationality($_POST['nationality'])."</div>";
}
 ?>
