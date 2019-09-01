<?php $this->load->view('flashmassage'); ?>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
  </head>
  <style media="screen">
  body{
    background-color: #dbdbdb;
  }
  </style>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="<?php echo base_url();?>User/index">FILESHARE</a>
  
  <!-- Links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item text-white ">
      <h1 style="margin-right: 170px">Welcome to Student Dashboard!</h1>
    </li>
    
    <li class="nav-item text-white mt-5  ">
            <b><?php echo 'Hi, ' . $this->session->userdata('name');?> (<?php echo $this->session->userdata('type');?> - <?php echo $this->session->userdata('course_type');?>)</b>
                      </li>
    <li class="nav-item">
      <a class="nav-link text-white border border-info" href="<?php echo base_url();?>Login/userLogout">Logout</a>
    </li>
  </ul>
</nav>

<div class="container responsive ">
 
  <div class="" >
    <div class="table-title ">
      <div class="row">
        <div class="col-sm-6 "><h2 align="center" ><b>[</b>All Shared <b>Document STUDENT]</b></h2></div>
        <form action="<?php echo base_url().'User/file'?>" method="POST" enctype = "multipart/form-data">
        <div class="form-group col-sm-6" style="margin-left: 110px; " >
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" name="files" id="exampleInputFile" aria-describedby="fileHelp">
  <button type="submit" class="btn btn-primary " name="file" style="margin-top:0px; margin-left: 220px">Submit</button></form>
      </div>

    </div>