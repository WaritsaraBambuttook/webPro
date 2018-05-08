<?php 
include('../four/connection.php');
$cusID = $_GET['Login_ID'];
$sql = 'DELETE FROM login WHERE Login_ID ='.$cusID;
$query = mysqli_query($connect,$sql);

include ('customer.php');
?>