<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
</head>
<body>

	<header>

		<div class="header">
<img src="<?php echo base_url();?>assets/banner.jpg" width="100%" height="150px">
		<div class="text"><h1 id="text">WELCOME TO FILESHARE</h1></div>
	</header>

	


<div class="container">
	<div class="row">
		<div class="col-md-6 ">


			<h2>Log In</h2>
  <form action="<?php echo base_url();?>User/data" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
		<div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> &nbsp&nbsp&nbsp&nbsp Remember me
      </label>
    </div>

    <div class="reg"><a href="<?php echo base_url();?>User/Register" class="btn btn-light rounded-lg btn-primary">New User Register Here!</a></div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
		</div>

	</div>

</div>


<div class="footer" style="height:100px;width:100%;margin-top:70px">
  <div class="row foot">
  	<div class="col-md-6">Copyright@2019-2020</div>
  	<div class="col-md-6"> Designed by KEVIN</div>
  </div>
</div>

</body>
</html>
