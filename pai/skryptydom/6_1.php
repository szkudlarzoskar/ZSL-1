<?php
//print_r($_POST);
if (!empty($_POST['wiek'])) {
  switch ($_POST['figura']) {
    case 'kwadrat':
      header('location: ./6_kwadrat.php');
      break;
      case 'prostokat':
        header('location: ./6_prostokat.php');
        break;
  }

}else {

?>


<script>
history.back();
</script>
<?php
  }

?>
