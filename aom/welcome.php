<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color : white; opacity:0.5;"  id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="welcome.php">Delevery</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse"  id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="welcome.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edite.php">Edite</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="order.php">Order Report</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    


    <!-- Page Header -->
    <header class="masthead">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="image/aa.jpg">
              <div class="carousel-caption d-none d-md-block">
                <section class="page-section">
                  <div class="container">
                    <div class="col-xl-9 mx-auto">
                      <div class="cta-inner text-center rounded">
                        <div class="product-item">
                          <div class="product-item-title d-flex">
                            <div class="bg-faded p-5 d-flex mr-auto rounded">
                              <h2 class="section-heading mb-0">
                              <span class="section-heading-upper">Delicious Treats, Good Eats</span>
                              <span class="section-heading-lower">Bakery &amp; Food</span>
                                <div class="intro-button mx-auto">
                                  <a class="btn btn-primary btn-xl" href="edite.php">EDITE</a>
                                </div>
                              </h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
              
              <div class="carousel-item">
                <img class="d-block w-100" src="image/bb.jpg" >
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="image/cc.jpg">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="image/dd.jpg">
              </div>
              
              
            </div>
            
          
    </header>

    
</body>
</html>