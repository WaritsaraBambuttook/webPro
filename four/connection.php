<?php

$connect = mysqli_connect("localhost","root", "", "delivery");
if (!$connect) {
    # code...
    die("Error".mysqli_error());
}

?>