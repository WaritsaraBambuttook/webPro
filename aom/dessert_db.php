<?php
    include('../four/connection.php');
    $sql = 'update dessert set DessertID="'.$_POST['des_id'].'",Dessert_name="'.$_POST['name'].'",PriceDessert="'.$_POST['price'].'"
            where DessertID="'.$_POST['des_id'].'"';
    $result = mysqli_query($connect,$sql);

    if (!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {
        include ('edite.php');
    }        
?>