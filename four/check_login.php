<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include ('connection.php'); //connect database
//---------------------
// 1 == admin
// 0 == user
//---------------------
$sql = "select * From login where Username ='".$username."' and Password = '".$password."'";
$result = mysqli_query($connect, $sql);
$rs = mysqli_fetch_array($result);

if (empty($rs)){ //ถ้ามันเป็ยค่าว่าง
    echo "<div style='color:red'>
            please try again!!! Username or Password is wrong <a href ='index.html'>Login again</a>
         </div>";
}
else{
    $role = $rs["Status"];
    if ($role === "1") {
        header("location:../aom/welcome.php");
    }else if($role === "0") {
        header("location:../toey/test.php");
    }
}

mysqli_close($connect);

?>