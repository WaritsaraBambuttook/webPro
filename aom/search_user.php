<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-expand-md navbar-dark">
    <div class="container-fluid">
        <div class="navbar-logo ">
            <a class="navbar-brand" href="welcome.php">Delivery</a>       
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>        
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="welcome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="edite.php">Edite</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="order.php">Order Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="../four/Logout.php">Logout</a>
                </li>
            </ul>
        </div> 
    </div>
</nav>

<form name = "user"action="result.php" method = "post">
    Please select User ID : <select name = 'user'>
    <?php
         include ('../four/connection.php');
         $sql = 'SELECT* FROM login';
         $result = mysqli_query($connect,$sql);
         if(!$result){
             echo mysqli_error().'<br>';
             die ('Can not access database!');
         }else{
             while($row = mysqli_fetch_assoc($result)){
                 echo '<option value=';
                 while(list($key,$value)=each($row)){
                     echo $value;
                     echo '>';
                     echo $value;
                     echo '</option>';
                 }
             }
             echo '<option value = "all">all</option>';
             echo '</select>';
             mysqli_close($connect);
         }
    ?>
    <br><input type="submit" value="Dtail">
</form>
    
</body>
</html>