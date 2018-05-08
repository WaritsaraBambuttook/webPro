<?php 
include('../four/connection.php');
$desID = $_GET['DessertID'];
$sql = "DELETE FROM dessert WHERE dessert.DessertID = '".$desID."'";
$query = mysqli_query($connect,$sql);

if($query){
	header('Location:edite.php');
}else{
	header('Location:edite.php');
	echo 'SQL Error';
}

?>