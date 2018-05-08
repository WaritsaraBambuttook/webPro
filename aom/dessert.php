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
                                <h4 class="card-title">Dessert</h4>
                                <h6 class="card-subtitle">ของหวาน</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="16%">DessertrID</th>
                                                <th width="15%">Name</th>
                                                <th width="15%">Price</th>
                                                <th width="40%">Function</th>
                                                
                                            </tr>
                                        </thead>
										<tbody>
									<?php
										
									include ('../four/connection.php');
								   $sql = "SELECT * FROM dessert ORDER BY DessertID ";
								   $query = mysqli_query($connect,$sql);
									while($result = mysqli_fetch_array($query)) {  ?>										
									        <tr>
                                                <td><?php echo $result['DessertID']; ?></td>
                                                <td><?php echo $result['Dessert_name'];?></td>
                                                <td><?php echo $result['PriceDessert']; ?></td>
                                                <td>
                                                <a href="up_dessert.php?DessertID=<?php echo $result['DessertID']; ?>">
                                                    <button type="button" class="btn btn-success btn-rounded m-b-10 m-l-5" onclick="return confirm('Confirm Update  !!!')">
                                                        Update
                                                    </button>
                                                </a>
												<a href="delete2.php?DessertID=<?php echo $result['DessertID']; ?>">
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