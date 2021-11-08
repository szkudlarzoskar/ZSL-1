<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Urzytkownicy</title>
  </head>
  <body>
    <h4>Urzytkownicy</h4>
    <?php
    $connect = new mysqli("localhost","root","","zsl_3pi2t g2");

    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);


  while ($user = $result->fetch_assoc()) {
    echo <<< USER
    Id: $user[id]<br>
     Imię i nazwisko: $user[name] $user[surname]<br>
     Data urodzenia: $user[birthday]<br>
     Data utworzenia użytkownika: $user[create_date]
     <hr>
USER;
  }
     ?>
  </body>
</html>
