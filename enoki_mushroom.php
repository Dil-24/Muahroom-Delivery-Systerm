
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
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li><a href="index1.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
          </ul>

      </div>
    </nav>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
            
            <h2 style="color:grey",>Fill this form to confirm your order.</h2>
<br>
<br>
<form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="images/download6.jpeg" >
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Enoki Mushroom</h3>
                        <p class="food-price">Rs.190.00 [100g]</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Nirmada Dilhari" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +94734xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. nirmaddilhari@a.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g.No,Road,City" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <footer>

	<p style="color:white;text-align:center;">
		<br>
		Email:&nbsp mushroomdelivary@gmail.com <br><br>
		Moblie:&nbsp &nbsp 0703047198<br><br>
        <img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/>
        <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/>
        <img src="https://img.icons8.com/fluent/48/000000/twitter.png"/>
	</p>
</body>
</html>