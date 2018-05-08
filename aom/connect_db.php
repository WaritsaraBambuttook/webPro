<?php
	

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "project";







$connect = mysqli_connect("localhost","root","","project");

mysqli_query($connect, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

?>