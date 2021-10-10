<?php
if (!empty($_POST['wiek'])&&!empty($_POST['narodowosc'])&&!empty($_POST['imie'])&&!empty($_POST['nazwisko'])) {
  $n= strtolower($_POST['narodowosc']);
  $i= strtolower($_POST['imie']);
  $na= strtolower($_POST['nazwisko']);
  echo "Wiek : ".$_POST['wiek']."<br><br>";
  echo "Imię : ".ucfirst($i)."<br><br>";
  echo "Nazwisko : ".ucfirst($na)."<br><br>";
  echo "Narodowość : ".ucfirst($n)."<br><br>";
}else {
  echo "Wypełnij wszystkie pola !";
}

 ?>
