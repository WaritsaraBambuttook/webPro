<html>
<form method ='post' action = 'food_db.php'>
<?php
    $connect = mysqli_connect("localhost","root","","delivery");
    $sql = 'SELECT * FROM food where FoodID='.$_GET['FoodID'].'';
    $result = mysqli_query($connect, $sql);
    if (!$result) {
        echo mysqli_error();
        die('Can not access database!');
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
        echo '<table border="1"align= "center" bgcolor = #FFCCCC>';
            echo '<tr>';
                echo '<td><b>';
                    echo "FoodID";
                echo '</b></td>';
                echo '<td>';
                    echo"<input type=text name=food_id value=$row[FoodID] disabled=disabled>".'<br>';
                    echo '<input type="hidden" name="food_id" value="'.$row['FoodID'].'">'."\n";
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "name";
                echo '</b></td>';
                echo '<td>';
                    echo "<input type=text name=name value=$row[Food_name] >".'<br>';
                echo '</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td><b>';
                    echo "Price";
                echo '</b></td>';
                echo '<td>';
                    echo "<input type=text name=price value=$row[PriceFood] >".'<br>';
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