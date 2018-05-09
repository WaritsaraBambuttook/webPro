<?php
    include('../four/connection.php');
    $sql = 'update food set FoodID="'.$_POST['food_id'].'",Food_name="'.$_POST['name'].'",PriceFood="'.$_POST['price'].'"
            where FoodID="'.$_POST['food_id'].'"';
    $result = mysqli_query($connect,$sql);
    if (!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {
        include ('edite.php');
    }        
?>