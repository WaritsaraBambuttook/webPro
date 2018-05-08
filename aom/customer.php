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
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customer</h4>
                                <h6 class="card-subtitle">ลูกค้า</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="11%">CustomerID</th>
                                                <th width="10%">Firstname</th>
                                                <th width="10%">Lastname</th>
                                                <th width="7%">DOB</th>
                                                <th width="7%">Address</th>
                                                <th width="5%">Telephone</th>
                                                <th width="5%">Email</th>
                                                <th width="20%">Fuction</th>
                                            </tr>
                                        </thead>
										<tbody>
									<?php
										
									include ('connect_db.php');
								   $sql = "SELECT * FROM customer ORDER BY CustomerID ";
								   $query = mysqli_query($connect,$sql);
									while($result = mysqli_fetch_array($query)) {  ?>										
									        <tr>
                                                <td><?php echo $result['CustomerID']; ?></td>
                                                <td><?php echo $result['Firstname'];?></td>
                                                <td><?php echo $result['Lastname']; ?></td>
                                                <td><?php echo $result['DOB']; ?></td>
                                                <td><?php echo $result['address']; ?></td>
                                                <td><?php echo $result['Telephone']; ?></td>
                                                <td><?php echo $result['Email']; ?></td>
                                                
                                                <td>
												<button type="button" class="btn btn-success btn-rounded m-b-10 m-l-5">
                                                    Edit
                                                </button>
                                                <a href="delete1.php?CustomerID=<?php
                                                 echo $result['CustomerID']; 
                                                 ?>">
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