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
    
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="report">
            <br><br><br><h1>Order Report</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <br>                               
                        <h5 class="card-subtitle">รายการสั่งซื้อ</h5>
                        
                        <div class="table-responsive m-t-40" >
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">ReportID</th>
                                        <th width="5%">Product Name</th>
                                        <th width="10%">Price</th>
                                        <th width="7%">Count</th>
                                        <th width="5%">Total</th>
                                        <th width="5%">Login Id</th>
                                       
                                    </tr>
                                </thead>
							    <tbody>
								    <?php
									    include ('../four/connection.php');
								        $sql = "SELECT * FROM report ORDER BY ReportID ";
                                        $query = mysqli_query($connect,$sql);
                                        while( $result = mysqli_fetch_array($query)) {  
                                    ?>										
									    <tr>
                                            <td><?php echo $result['ReportID']; ?></td>
                                            <td><?php echo $result['Product_name'];?></td>
                                            <td><?php echo $result['Price']; ?></td>
                                            <td><?php echo $result['Count']; ?></td>
                                            <td><?php echo $result['Total']; ?></td>
                                            <td><?php echo $result['Login_ID']; ?></td>
                                            
                                       
                                       
                                        </tr>	                               
									<?php
										}
	                                ?>	
								</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></body>
</html>