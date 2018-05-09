<?php
session_start();

include('../four/connection.php');

$sql="select * from food";
$result=mysqli_query($connect,$sql);

$sql1="select * from dessert";
$result1=mysqli_query($connect,$sql1);

if(isset($_POST["add_product"])){
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id)){
                $count = count($_SESSION["shopping_cart"]);
                  $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                  $_SESSION["shopping_cart"][$count] = $item_array;
           }else{
                echo '<script>alert("สินค้าถูกเพิ่มแล้ว")</script>';
                echo '<script>window.location="index.php"</script>';
           }
      }
      else{
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
if(isset($_GET['action'])){
    if($_GET['action']=="delete"){
        foreach ($_SESSION['shopping_cart'] as $key => $value) {
           if($value['item_id']==$_GET['id']){
              unset($_SESSION['shopping_cart'][$key]);
              echo '<script>alert("ลบเรียบร้อย")</script>';
              echo '<script>window.location="test.php"</script>';
             }
       }
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    
    <title>Shopping Cart</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="menu.css">   -->
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    -->
  </head>

  <body id="page-top" >
  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color : black; opacity:0.8;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Foods Derilveru</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Food</a>
            </li>

            <!--
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>  -->
          </ul>
        </div>
      </div>
    </nav>

    <!--about-->
  <section id="services">
    <div class="container">

      <div class="row">
        <div class="col-md-12 text-center">
          <img src="image/main.jpg" class="rounded-circle" alt="Cinque Terre">
          <br>
          <br>
        </div>
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Foods Derilvery</h2>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-12">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Street Foods</h4>
          <p class="text-muted">“If they stare, let them stare. You can’t blend in when you were born to stand out.” </p>
        </div>
      </div>
    </div>
  </section>


<!--
    <br>
    <div class="container" style="width:700px">
        <h3 align="center">ระบบตะกร้าสินค้า</h3><br> -->

<!-- Portfolio Grid of Foods -->
<br>

    <hr>
    <br>
    <div class="container" id="portfolio">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Foods/Dessert</h2>
          <h3 class="section-subheading text-muted">Best selling diet menu.</h3>
        </div>
      </div>
    </div>
    

   
        <?php
                while($row=mysqli_fetch_array($result)){
        ?> 
 
    <div class="col-md-4 text-center">
        <form method="post" action="test.php?action=add&id=<?php echo $row['FoodID'];?>">
          <div style="border:1px solid #333;background-color:white;border-radius:0px;padding:1px;margin:20px">
              <img src="<?php echo $row['img'];?>" class="img-responsive" /><br>
              <h4 class="text-info">Dessert : <?php echo $row['Food_name'];?></h4>
              <h4 class="text-danger">Price: <?php echo number_format($row['PriceFood'],2);?> Baht.</h4>
           
              <input type="text" name="quantity" class="form-control" value="1"/>
              <input type="hidden" name="hidden_name" value="<?php echo $row['Food_name'];?>"/>
              <input type="hidden" name="hidden_price" value="<?php echo $row['PriceFood'];?>"/>
              <input type="submit" name="add_product" style="margin-top:20px; margin-bottom:20px;" class="btn btn-success" value="ADD"/>
         </div>
        </form>
    </div>
  
  <?php
             }
            ?>


<!---ของหวาน-->


    <?php
        while($row=mysqli_fetch_array($result1)){
    ?>
    <div class="col-md-4 text-center">
        <form method="post" action="test.php?action=add&id=<?php echo $row['DessertID'];?>">
          <div style="border:1px solid #333;background-color:white;border-radius:5px;padding:1px;margin:20px">
              <img src="<?php echo $row['img'];?>" class="img-responsive" /><br>
              <h4 class="text-info">Food : <?php echo $row['Dessert_name'];?></h4>
              <h4 class="text-danger">Price: <?php echo number_format($row['PriceDessert'],2);?> Bath.</h4>
           
              <input type="text" name="quantity" class="form-control" value="1"/>
              <input type="hidden" name="hidden_name" value="<?php echo $row['Dessert_name'];?>"/>
              <input type="hidden" name="hidden_price" value="<?php echo $row['PriceDessert'];?>"/>
              <input type="submit" name="add_product" style="margin-top:20px; margin-bottom:20px;" class="btn btn-success" value="ADD"/>
         </div>
        </form>
    </div>
    <?php
        }
    ?>

    <br>
    <div style="clear:both;"></div>
    <br>
      <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th><center>Product</center></th>
          <th><center>Quanilty</center></th>
          <th><center>Price</center></th>
          <th><center>Total</center></th>
          <th><center>Process</center></th>
        </tr>

        <?php
          if(!empty($_SESSION["shopping_cart"])){
              $total=0;
              foreach ($_SESSION['shopping_cart'] as $key => $value) { ?>
              <tr>
                <td><?php echo $value['item_name'];?></td>
                <td><?php echo $value['item_quantity'];?></td>
                <td><?php echo number_format($value['item_price'],2);?></td>
                <td><?php echo number_format($value['item_price']*$value['item_quantity'],2);?></td>
                <td><a href="test.php?action=delete&id=<?php echo $value['item_id'];?>"  >Dlete</td>
              </tr>
          <?php
              $total=$total+($value['item_price']*$value['item_quantity']);
              }
          ?>
          <tr>
              <td colspan="3" align="right">Total Price</td>
              <td align="right">฿ <?php echo number_format($total, 2); ?></td>
              <td></td>
              </tr>
          <?php
          }
        ?>
      </table>
      <!-- <?php echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; ?> -->
    </div>

    <div class="contrainer text-center">
    <form action="SubmitMenu.php" method="post">
          <button type="submit" class="submitmenu"  >Confirm menu</button>
    </form>
    </div>
    <br>
    


    </div>
  </body>
</html>