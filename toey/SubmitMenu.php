<?php

include('../four/connection.php');

$sql = 'INSERT INTO report (ReportID,Product_name,Price,Count,Total,Login_id) VALUES("","'.$value['item_name'].'","'.$_POST["item_price"].'","'.$_POST["item_quantity"].'","'.$_POST["item_price"]*$_POST["item_quantity"].'","'.$_POST["Login_ID"].'")';
$result = mysqli_query($connect, $sql);


if (empty($result)){ //ถ้ามันเป็ยค่าว่าง
    echo "<div style='color:red'>
            please try again!!! Username or Password is wrong <a href ='index.html'>Login again</a>
         </div>";
}
else{
    echo "yes";
}

mysqli_close($connect);



?>