<?php 
include('../four/connection.php');
$loginID = $_GET['Login_ID'];
$sql = "DELETE FROM login WHERE login.Login_ID = '".$loginID."'";
$query = mysqli_query($connect,$sql);

if($query){
	header('Location:edite.php');
}else{
	header('Location:edite.php');
	echo 'SQL Error';
}


?>