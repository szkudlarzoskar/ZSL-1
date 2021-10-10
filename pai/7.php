<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
     if (!isset($_POST['person'])&& !isset($_POST['buttonavg'])){
       echo <<< FORMCOUNTPERSON
       <h3>Ilość osób w rodzinie </h3>
       <form method="post">
         <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
         <input type="submit"  value="Zatwierdź">
       </form>
      FORMCOUNTPERSON;
    }
     ?>



    <?php
    if (!empty($_POST['person'])) {
      echo "<h3>Ilość osób w rodzinie : $_POST[person]</h3>";
      echo <<< FORMAGEPERSON
      <form method="POST">
      FORMAGEPERSON;
      for ($i=1 ; $i <= $_POST['person']  ; $i++ ) {
        echo "<input type=\"number\" name=\"age$i\" placeholder=\"Podaj wiek osoby $i\"> <br><br>" ;
      }
      echo <<< FORMAGEPERSON
     <input type="submit" name="buttonavg" value="Oblicz średni wiek">
      </form>
     FORMAGEPERSON;

    }
    if (isset($_POST['buttonAVG'])) {
            $ageAVG=0;
            $z=0;
            foreach ($_POST as $key => $value) {
                if ($key != 'buttonAVG') {
                $ageAVG=$ageAVG+$value;
                $z++;
                }
            }
            $ageAVG1=$ageAVG / $z;
            $ageAVG1=number_format($ageAVG1,2,',','');
            echo "Średnia: $ageAVG1";
        }
//dodac zaokaglenie wyniku do 2 miejsc po przecinku (number_FORMAT)
//dodac hiperlacze wyswietlajace poczatokowy formularz (header(location))
    ?>
  </body>
</html>
