<?php
    include('../four/connection.php');
    $sql = 'update login set Login_ID="'.$_POST['login_id'].'",Firstname="'.$_POST['fname'].'",Lastname="'.$_POST['address'].'",Telephone="'.$_POST['tel'].'",Email="'.$_POST['email'].'",Status="'.$_POST['status'].'"
            where Login_ID="'.$_POST['login_id'].'"';
    $result = mysqli_query($connect,$sql);
    if (!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {
        include ('edite.php');
    }        
?>