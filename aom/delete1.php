<?php 
include('../four/connection.php');
$delect = $_POST['delect'];
$sql = 'DELETE FROM login WHERE Login_ID ='.$delect;
$query = mysqli_query($connect,$sql);

if($query){
    include ('customer.php');
}else{
    echo "<div style='color:red'>
            please try again!!! cannot delect data <a href ='customer.php'>Back to report</a>
         </div>";
}
mysqli_close($connect);
?>