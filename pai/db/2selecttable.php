<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Urzytkownicy</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h4>Urzytkownicy</h4>
    <?php
    $connect = new mysqli("localhost","root","","zsl_3pi2t g2");

    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);

echo <<< TABLE
  <table>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Birthday</th>
      <th>Create date</th>
    </tr>
TABLE;


  while ($user = $result->fetch_assoc()) {
    echo <<< USER
    <tr>
    <td>$user[id]</td>
    <td>$user[name]</td>
    <td>$user[surname]</td>
    <td>$user[birthday]</td>
    <td>$user[create_date]</td>
    </tr>


USER;
  }


  echo "</table>";
     ?>


  </body>
</html>
