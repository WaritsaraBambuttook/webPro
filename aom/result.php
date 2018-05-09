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
            </ul>
        </div> 
    </div>
</nav>
  
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="report">
            <br><br><br><h1>User Report</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <br>                               
                        <h5 class="card-subtitle">ข้อมูลสมาชิก</h5>
                        
                        <div class="table-responsive m-t-40" >
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th width="5%">First Name</th>
                                        <th width="10%">Last Name</th>
                                        <th width="7%">Telephone</th>
                                        <th width="7%">Email</th>
                                        <th width="5%">Address</th>
                                        <th width="5%">Username</th>
                                        <th width="5%">Password</th>
                                        <th width="5%">Status</th>
                                       
                                    </tr>
                                </thead>
							    <tbody>
								    <?php
                                         include ('../four/connection.php');
									    if($_POST['user']=="all"){
                                            $sql = 'SELECT * FROM login';
                                        }else{
                                            $sql = 'SELECT* FROM login WHERE Login_ID = '.$_POST['user'];
                                        }
                                        $result = mysqli_query($connect,$sql);
                                        
                                        while( $row = mysqli_fetch_assoc($result)) {  
                                    										
                                            echo '<tr>';
                                            while(list($key,$value)=each($row)){
                                            if($value==''){
                                                echo '<td>'.'&nbsp;'.'</td>';                                            
                                            }else{
                                                echo '<td>'.$value.'</td>';
                                            }                   
									
                                        }echo '</tr>';
                                    } echo '</table>'
                                    
	                                ?>	
								</tbody>
                            </table>
                            <center><a href="search_user.php"><input type="button" value="Back"></a></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></body>
</html>