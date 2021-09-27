<?php
//print_r($_POST);
if(!empty($_POST['name']) && (!empty($_POST['figura']))) {
switch($_POST['figura']){
    case 'kwadrat':
        header('location: ./kwadrat.php'); //przekierowuje na nowa strone
        break;
    case 'prostokat':
        header('location: ./prostokat.php');
        break;
};
}else{
    ?>
    <script>
history.back(); //wraca na poprzednia strone
        </script>
        <?php
}
?>