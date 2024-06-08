<?php
include "connection.php";
 ?>
<!DOCTYPE html>
<html>
<head>

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script> 
  
  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

   <nav style="width:100px," class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active"> MUSHROOM DILIVARY SYSTEM </a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index1.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li style="color:red;"><h1>You can order now!</li></h1>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="index1.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
          </ul>

      </div>
    </nav>
 <!-- fOOD MEnu Section Starts Here -->
 
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Your choice</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/download1.jpeg">
                </div>

                <div class="food-menu-desc">
                    <h4>Button Mushroom</h4>
                    <p class="food-price">Rs.150.00 [100g]</p>
                    <p class="food-detail">
                        They are most common variety of mushrooms found in India and are a popular choice for cooking as well.
                    </p>
                    <br>

                    <a href="products.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
<br>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/download2.jpeg" >
                </div>

                <div class="food-menu-desc">
                    <h4>Portobello Mushroom</h4>
                    <p class="food-price">Rs.250.00 [100g]</p>
                    <p class="food-detail">
                        They are low in calories and are a good source of 15 different vitamins, minerals and antioxidant phytonutrients including copper, selenium and B vitamins.
                    </p>
                    <br>

                    <a href="products.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
<br>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/download3.jpeg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Oyester Mushroom</h4>
                    <p class="food-price">Rs.180.00 [100g]</p>
                    <p class="food-detail">
                        Oyster mushrooms are high in minerals and vitamins B3, B5, B6, D, and A, which are known to be essential for leucocyte functioning.
                    </p>
                    <br>

                    <a href="products.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
<br>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/download5.jpeg">
                </div>

                <div class="food-menu-desc">
                    <h4>Shiitake Mushroom</h4>
                    <p class="food-price">Rs.190.00 [100g]</p>
                    <p class="food-detail">
                        Shiitake mushrooms are a powerful source of many nutrients and even contain many of the same amino acids as meat.
                    </p>
                    <br>

                    <a href="shiitake_mushroom.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
<br>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/download6.jpeg" >
                </div>

                <div class="food-menu-desc">
                    <h4>Enoki Mushroom</h4>
                    <p class="food-price">Rs.190.00 [100g]</p>
                    <p class="food-detail">
                        Although enoki mushrooms are relatively low in calories, they are packed with important vitamins, minerals, and antioxidants.
                    </p>
                    <br>

                    <a href="products.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/download7.jpeg" >
                </div>

                <div class="food-menu-desc">
                    <h4>Straw Mushroom</h4>
                    <p class="food-price">Rs.170.00 [100g]</p>
                    <p class="food-detail">
                        Straw mushrooms is considered a powerful antioxidant found in mushrooms with the effect of protecting the body against free radicals. 

                    </p>
                    <br>

                    <a href="products.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>
<br>

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
