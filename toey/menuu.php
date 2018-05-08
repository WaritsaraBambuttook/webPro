<!doctype html>
<html lang="en"> 
  
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
// This button will increment the value
$('.qtyplus').click(function(e){
// Stop acting like a button
e.preventDefault();
// Get the field name
fieldName = $(this).attr('field');
// Get its current value
var currentVal = parseInt($('input[name='+fieldName+']').val());
// If is not undefined
if (!isNaN(currentVal )&& currentVal < 5) {
// Increment
$('input[name='+fieldName+']').val(currentVal + 1);
} else {
// Otherwise put a 0 there
$('input[name='+fieldName+']').val(5);
}
});

// This button will decrement the value till 0
$(".qtyminus").click(function(e) {
// Stop acting like a button
e.preventDefault();
// Get the field name
fieldName = $(this).attr('field');
// Get its current value
var currentVal = parseInt($('input[name='+fieldName+']').val());
// If it isn't undefined or its greater than 0
if (!isNaN(currentVal) && currentVal > 0) {
// Decrement one
$('input[name='+fieldName+']').val(currentVal - 1);
} else {
// Otherwise put a 0 there
$('input[name='+fieldName+']').val(0);
}
});
});
</script>

  <head>
    <title>Menu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
  <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
  
  </head>

 
 

  <body>
  
  
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
                    <img class="d-block w-100" src="image/pic.jpg">
                    <!--    <div class="carousel-caption d-none d-md-block">
                        <h1>WELCOME</h1>
                        <p>Traval, a place search service for your busy life</p>
                        </div>  -->
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/pic2.jpg"  >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/pic3.jpg">
                </div> 
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/pic4.jpg">
                </div>
               
            </div>

        </div>

    </header>

    <!-- Portfolio Grid of Foods -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Foods</h2>
          <h3 class="section-subheading text-muted">Best selling diet menu.</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/food/11.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Healthy Salad</h4>
            <p class="text-muted">Fruit and vegetable salad with black pepper chicken.</p>
            <h5>79 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/food/12.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Fried rice</h4>
            <p class="text-muted">Fried rice with shrimp, Bacon Put the carrots, peas ,and stir with special sauce.</p>
            <h5>89 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/food/13.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>soup</h4>
            <p class="text-muted">Spicy mixed vegetable soup</p>
            <h5>79 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/food/7.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Japanese Curry Rice</h4>
            <p class="text-muted">Fried rice with special sauce, fried pork, fried chicken skin with fresh egg yolk and side dishes.</p>
            <h5>99 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/food/14.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Mixed salad</h4>
            <p class="text-muted">Total Organic vegetables 6 type with white sesame dressing.</p>
            <h5>79 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/food/15.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Rice topped with stir-fried pork and basil.</h4>
            <p class="text-muted">Fried pork and basil with a special sauce and fried egg.</p>
            <h5>69 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  
    <!-- Portfolio Grid of Dessert -->
    <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Desserts</h2>
          <h3 class="section-subheading text-muted">Best selling diet menu.</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/dessert/21.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Smoothie Mixed Berry</h4>
            <p class="text-muted">SmoothieBlue Berry Smoothie and whipped cream for decoration </p>
            <h5>69 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/dessert/22.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Pancake </h4>
            <p class="text-muted">Pancake with honey sauce and berries 4 types.</p>
            <h5>79 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/dessert/23.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Crepes cake</h4>
            <p class="text-muted">Matcha mille crepes green tea cake</p>
            <h5>79 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/dessert/24.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Brownie Cake</h4>
            <p class="text-muted">Sprinkle chocolate powder. Put the granules, chocolate chip</p>
            <h5>49 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/dessert/25.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Strawberry cheesecake</h4>
            <p class="text-muted">Total Organic vegetables 6 type with white sesame dressing.</p>
            <h5>69 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="image/dessert/26.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Donut Cake</h4>
            <p class="text-muted">The dough is made from powder, chocolate and white sauce-coated insert oreo.</p>
            <h5>59 bath.</h5>
            <a id="go" herf="#" class="buttom">Add</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>