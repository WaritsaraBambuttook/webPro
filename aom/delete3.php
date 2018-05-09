<?php 
	include('../four/connection.php');
	$foodID = $_GET['FoodID'];
	$sql = "DELETE FROM food WHERE food.FoodID = '".$foodID."'";
	$query = mysqli_query($connect,$sql);

	if($query){
		header('Location:edite.php');
	}else{
		header('Location:edite.php');
		echo 'SQL Error';
	}

?>