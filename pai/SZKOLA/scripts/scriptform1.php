<?php
if (!empty($_POST['name'])) {
  require_once '../functions/functionform1.php';
  //echo text();
  echo name('Krystyna').'<hr>';
//echo 'Imię: '.name($_POST['name']);
echo 'Imię: '.validateString($_POST['name'],($_POST['lenght']));
}
 ?>
