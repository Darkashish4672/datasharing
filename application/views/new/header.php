

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Acme|EB+Garamond|Saira+Stencil+One&display=swap" rel="stylesheet">

    
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
  </head>
  <style media="screen">
  body{
    background-color: #dbdbdb;
  }
  </style>
  <script type="text/javascript">
  $(document).ready(function(){
  
    $(".alert").fadeOut(5000);
   
 
});
</script>
  <body>
    
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark " >
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#" style="margin-bottom: 16px;"><h3 style="">FILESHARE</h3></a>
        <!-- Links -->
        <ul class="navbar-nav" >
          <li class="nav-item" style="margin-left: 100px">
            <a class="nav-link" href="<?php echo base_url();?>User/index">HOME</a>
          </li>
          <li class="nav-item" style="">
            <a class="nav-link" href="<?php echo base_url();?>User/addStudent">Add Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>User/editStudent">Edit Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>User/Upload">Upload Document</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>User/Permision">Permision Document</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Login/userLogout">Log Out!</a>
          </li>
          <li class="nav-item mt-4  ">
            <b style="margin-top: 200px; color: white ;line-height: 2.9;"><?php echo 'Hi, ' . $this->session->userdata('name');?> (<?php echo $this->session->userdata('type');?> - <?php echo $this->session->userdata('course_type');?>)</b>
                      </li>
        </ul>
      </nav>

