<?php
session_start();
include('../four/connection.php');
echo $_SESSION["Login_ID"];

$itemArray = $_SESSION["shopping_cart"];

for ($i=0; $i < count($itemArray) ; $i++) { 
    $name = $itemArray[$i]['item_name'];
    $count = $itemArray[$i]['item_quantity'];
    $price = $itemArray[$i]['item_price'];
    echo $name.$count.$price;
    $sql = 'INSERT INTO report (ReportID,Product_name,Price,Count,Total,Login_id) 
    VALUES("","'.$name.'","'.$price.'","'.$count.'","'.$price*$count.'","'.$_SESSION["Login_ID"].'")';
    $result = mysqli_query($connect, $sql);

    if (empty($result)){ //ถ้ามันเป็ยค่าว่าง
    echo "<div style='color:red'>
            please try again!!! Username or Password is wrong <a href ='index.html'>Login again</a>
         </div>";
    }
    else{
    echo "Done!";
    }
}




mysqli_close($connect);



?>