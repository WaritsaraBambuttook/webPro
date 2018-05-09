<html>
<form method ='post' action = 'dessert_db.php'>
<?php
    $connect = mysqli_connect("localhost","root","","delivery");
    $sql = 'SELECT * FROM dessert where DessertID='.$_GET['DessertID'].'';
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        echo mysqli_error();
        die('Can not access database!');
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<table border="1"align= "center" bgcolor = #FFCCCC>';
            echo '<tr>';
            echo '<td><b>';
            echo "DessertID";
            echo '</b></td>';
            echo '<td>';
            echo"<input type=text name=des_id value=$row[DessertID] disabled=disabled>".'<br>';
            echo '<input type="hidden" name="des_id" value="'.$row['DessertID'].'">'."\n";
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td><b>';
            echo "Name";
            echo '</b></td>';
            echo '<td>';
            echo "<input type=text name=name value=$row[Dessert_name] >".'<br>';
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td><b>';
            echo "Price";
            echo '</b></td>';
            echo '<td>';
            echo "<input type=text name=price value=$row[PriceDessert] >".'<br>';
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