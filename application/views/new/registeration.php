  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registration!</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<style media="screen">
body{
	background-color:#dbdbdb;
}

</style>
<body>
	<header>

		<div class="header">
<img src="<?php echo base_url();?>assets/banner.jpg" width="100%" height="150px">
		<div class="text"><h1 id="text">WELCOME TO FILESHARE</h1></div>
	</header>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <h3>FILESHARE</h3>
  </a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item" style="margin-left: 200px">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
  </ul>
</nav>
<div class="col-md-6">
	<div class="container">
  <h2>Registration form</h2>
  <form action="regquery.php" method="POST" >
    <div class="form-group">
      <label for="email">FIRST NAME:</label>
      <input type="text" class="form-control" id="email" placeholder="First Name" name="fname">
    </div>
    <div class="form-group">
      <label for="pwd">LAST NAME:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Last Name" name="sname">
    </div>
		<div class="form-group">
      <label for="email">EMAIL:</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>
</div>

<div class="footer">
  <div class="row foot">
  	<div class="col-md-6">Copyright@2019-2020</div>
  	<div class="col-md-6"> Designed by KEVIN</div>
  </div>
</div>

</body>
</html>
