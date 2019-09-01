<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Student Dashboard!</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<header>

		<div class="header">
<img src="banner.jpg" width="100%" height="150px">
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
      <a class="nav-link" href="stu_login.php">Student login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
  </ul>
</nav>
<h1 style="text-align:center;">WELCOME TO Student Dashboard!</h1>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Uplaod <b>Document</b></h2></div>
                  <Div class="col-sm-4">  <form action="upload.php" method="post" >
<input type="file" name="fileToUpload" ">
<input type="submit" value="Upload file" name="submit">
</form></div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th>Document name</th>
                        <th>uploaded by</th>
                        <th>Date</th>

                        <th>Download</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>marksheet.pdf</td>
												<td>AMIT</td>
                        <td>10/12/2019</td>

                        <td>

													<a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-download" style="font-size:24px"></i></a>

                        </td>
                    </tr>
                    <tr>

                      <td>certificate.pdf</td>
											<td>ASISH</td>
                      <td>12/11/2018</td>

                        <td>
													<a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-download" style="font-size:24px"></i></a>

                        </td>
                    </tr>
                    <tr>

                      <td>TC.pdf</td>
											<td>HARIKESH AHIR</td>
                      <td>14/110/2014</td>

                        <td>
													<a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-download" style="font-size:24px"></i></a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
     <script src="script.js"></script>
     <?php include "footer.php"; ?>
</body>
</html>
