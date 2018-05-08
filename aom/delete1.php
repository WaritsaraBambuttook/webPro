<?php 
include('connect_db.php');
$cusID = $_GET['CustomerID'];
$sql = "DELETE FROM `project` WHERE `customer`.`CustomerID` = $cusID";
$query = mysqli_query($connect,$sql);
?>