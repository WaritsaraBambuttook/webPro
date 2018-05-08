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

    
</body>
</html>
<body>
    
<div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="report">
                    <h1>Report</h1>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Login</h4>
                                <br>                               
                                <h5 class="card-subtitle">รายชื้อผู้เข้าใช้</h5>
                                <h6>Status : 1 == Admin , 0 == User</h6>

                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="11%">CustomerID</th>
                                                <th width="10%">Firstname</th>
                                                <th width="10%">Lastname</th>
                                                <th width="7%">Address</th>
                                                <th width="5%">Telephone</th>
                                                <th width="5%">Email</th>
                                                <th width="7%">Status</th>
                                                <th width="20%">Fuction</th>
                                            </tr>
                                        </thead>
										<tbody>
									<?php
										
									include ('../four/connection.php');
								   $sql = "SELECT * FROM login ORDER BY Login_ID ";
                                   $query = mysqli_query($connect,$sql);
                                  
									while( $result = mysqli_fetch_array($query)) {  ?>										
									<tr>
                                                <td><?php echo $result['Login_ID']; ?></td>
                                                <td><?php echo $result['Firstname'];?></td>
                                                <td><?php echo $result['Lastname']; ?></td>
                                                <td><?php echo $result['Address']; ?></td>
                                                <td><?php echo $result['Telephone']; ?></td>
                                                <td><?php echo $result['Email']; ?></td>
                                                <td><?php echo $result['Status']; ?></td>
                                                
                                                <td>
												
												<a href="delete1.php?Login_ID=<?php echo $result['Login_ID']; ?>">
                                                <button type="button" class="btn btn-danger btn-rounded m-b-10 m-l-5" onclick="return confirm('Confirm Delete  !!!')">
                                                    Delete
                                                </button>
                                                </a>
                                                </td>
												
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
                <!-- End PAge Content -->
            </div></body>
</html>