<?php
$connect = mysqli_connect("localhost","root","","delivery");
$sql = 'update customer set Login_ID="'.$_POST['login_id'].'",Firstname="'.$_POST['fname'].'",Lastname="'.$_POST['address'].'",Telephone="'.$_POST['tel'].'",Email="'.$_POST['email'].'",Status="'.$_POST['status'].'"
		where Login_ID="'.$_POST['login_id'].'"';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error().'<br>';
    die('Can not access database!');
} else {
    echo '<table border="1" align = "center" bgcolor = #339900 >';
    echo '<tr>';
    echo '<td><h1>Congratulation! The record is updated.</h1></td>';
    echo '</tr>';
	echo '</table>';
}        
?>