<html>
<form method ='post' action = 'update_db.php'>
<?php
    $connect = mysqli_connect("localhost","root","","delivery");
    $sql = 'SELECT * FROM login where Login_ID='.$_POST['Login_ID'].'';
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        echo mysqli_error();
        die('Can not access database!');
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
        echo '<table border="1"align= "center" bgcolor = #FFCCCC>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Login_ID";
                echo '</b></td>';
                echo '<td>';
                    echo"<input type=text name=login_id value=$row[Login_ID] disabled=disabled>".'<br>';
                    echo '<input type="hidden" name="login_id" value="'.$row['Login_ID'].'">'."\n";
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Firstname";
                echo '</b></td>';
                echo '<td>';
                    echo "<input type=text name=fname value=$row[Firstname] >".'<br>';
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Lastname";
                echo '</b></td>';
                echo '<td>';
                    echo "<input type=text name=lname value=$row[Lastname] >".'<br>';
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Address";
                echo '</b>';
                echo '<td><b>';
                    echo "<input type=text name=address value=$row[Address]>".'<br>';
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Telephone";
                echo '</b></td>';
                echo '<td>';
                    echo "<input type=text name=tel value=$row[Telephone] >".'<br>';
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Email";
                echo '</b></td>';
                echo '<td>';
                    echo "<input type=text name=email value=$row[Email] >".'<br>';
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Status";
                echo '</b></td>';
                echo '<td>';
                    echo "<input type=text name=status value=$row[Status] >".'<br>';
                echo '</td>';
            echo '</tr>';
        echo '</table>';
        } 
        mysqli_close($connect);
    }
?>
<br>

<center><input type = "submit" value="Update"><center>
</form>
</html>