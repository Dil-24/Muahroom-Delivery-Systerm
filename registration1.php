<?php

include "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="Style2.css">
<meta chararset="utf-8">
<meta name="viewport" content="device-width,intitial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>

   <nav style="width:100px," class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active"> MUSHROOM DILIVARY SYSTEM </a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index1.php">HOME</a></li>
            
            
          </ul>

          <ul class="nav navbar-nav navbar-right">

            
            <li><a href="index1.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            
          </ul>

      </div>
    </nav>
</header>
<section>
<div class="reg_img">
<br><br><br>
<div class="box2">
<h1 style="text-align:center;color:white; font-size:35px;font-family:Lucida Console;">Online Delivary System</h1><br>
<h1 style="text-align:center; font-size:25px;color:white;">User Registration Form</h1><br>
<form style="text-align:center;" name= "Registration1" action="" method="post">
<br><br>
<div class="login">
<input style = "color:black" class="form-conrtol" type="text" name="first"placeholder="First Name "required=""><br><br>
<input style = "color:black"class="form-conrtol"type="text" name="last"placeholder="Last Name "required=""><br><br>
<input style = "color:black" class="form-conrtol" type="text" name="username"placeholder="Username" required=""><br><br>
<input style = "color:black"class="form-conrtol" type="password" name="password"placeholder="Password" required=""><br><br>
<input style = "color:black"class="form-conrtol" type="text" name="roll"placeholder="Roll No "required=""><br><br>
<input style = "color:black"class="form-conrtol" type="text" name="email"placeholder="Email "required=""><br><br>
<input style = "color:black" class="form-conrtol" type="text" name="contact"placeholder="Contac No "required=""><br><br>
<input class = "btn btn-default" onclick="alert('Your Registration is successfull!')"  type="submit" name="submit" value="Sign Up" style="color:black;width:90px;height:30px">
</div>
</form>
</div>
</div>
</section>
<footer>

	<p style="color:white;text-align:center;">
		<br>
		Email:&nbsp mushroomdelivary@gmail.com <br><br>
		Moblie:&nbsp &nbsp 0703047198
	</p>

	</footer>

<?php
if(isset($_POST['submit']))
mysqli_query($db,"INSERT INTO`user` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]','$_POST[roll]', '$_POST[email]', '$_POST[contact]'); ");
?>
</body>
</html>