<?php

$connect = mysqli_connect("localhost","root", "", "delivery");
if (!$connect) {
    # code...
    die("Error".mysqli_error());
}
mysqli_query($connect, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
?>