<?php 

$con = mysqli_connect('localhost','root','','logindata');

if ($con) {
	echo "connection success!<br>";

}
else{
   echo "connection failed!<br>";

}
 $creatdb = "CREATE DATABASE if not exists logindata";
 $run1 = mysqli_query($con,$creatdb);

 if ($run1) {
	echo "database create success!<br>";

}
else{
   echo "database create failed!<br>";

}
 $table = " CREATE TABLE IF NOT EXISTS userlogin(
 id int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 Email VARCHAR(50) not null,
 Password varchar (50) not null)";
 $run2 = mysqli_query($con,$table);
 if ($run2) {
 	echo "table create success!<br>";

 }else
 {
 	echo "table create failed<br>";

 }

 $email = $_POST['email'];
 $pass = $_POST['pswd'];

$insert = "INSERT INTO userlogin( Email,Password) VALUES ('$email','$pass')";
$run3 = mysqli_query($con,$insert);

if ($run3) {
	echo "insert complete!";
	header("location:admin.php");
}
else{
	echo "insert failed";
}





?>