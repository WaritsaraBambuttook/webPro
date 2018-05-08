<?php
session_start();
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$address =$_POST['address'];


include ('connection.php'); //connect database

$insert = 'INSERT INTO login (firstname,lastname,telephone,email,address,username,password) VALUES("'.$firstname.'","'.$lastname.'","'.$telephone.'","'.$email.'","'.$address.'","'.$username.'","'.$password.'")';
$result_Insert = mysqli_query($connect,$insert) or die (mysqli_error($connect));

if(!$result_Insert){
    echo mysqli_error();
    echo "<div style='color:red'>
            please try again!!!  <a href ='register.html'>register again</a>
         </div>";
}
else{
    
    echo "Welcome"."   ".$result_Insert['firstname']."   ",$result_Insert['lastname'];
    echo "<a href ='index.html'>กลับไปที่หน้าล็อคอิน</a>";
    $_SESSION['firstname'] = $result_Insert;
}

mysqli_close($connect);
?>