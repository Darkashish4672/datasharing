<?php
$con=mysqli_connect('localhost','root','','newstudent');
if (!$con) {
  die("failed".mysqli_connect_error());
}
else{
  echo "succesful<br>";
}
$sql="CREATE DATABASE IF NOT EXISTS newstudent";
$run=mysqli_query($con,$sql);
$table = "CREATE TABLE IF NOT EXISTS studentdata(
ID int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Name varchar(10) not null,
Cyear int(10) not null,
Email varchar(50) not null,
Password varchar(50) not null
)";
$run1=mysqli_query($con,$table);
if($run1){
  echo "succesful create table<br>";
}
else{
  die("PRoblem table");
}
$name = $_POST['name'];
$cyear = $_POST['cyear'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = "INSERT INTO studentdata(Name,Cyear,Email,Password) VALUES ('$name','$cyear','$email','$password')";
$run2 = mysqli_query($con,$insert);
if ($run2) {
  echo "success insertion!";
}else{
  echo "failed insertion!";
}
?>