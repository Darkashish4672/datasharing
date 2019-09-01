<?php 

$con = mysqli_connect('localhost','root','','reguser');

if ($con) {
	echo "connection success!<br>";

}
else{
   echo "connection failed!<br>";

}
 $creatdb = "CREATE DATABASE if not exists reguser";
 $run1 = mysqli_query($con,$creatdb);

 if ($run1) {
	echo "database create success!<br>";

}
else{
   echo "database create failed!<br>";

}
 $table = " CREATE TABLE IF NOT EXISTS regdata(
 id int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 Fname VARCHAR(50) not null,
 Sname varchar (50) not null,
 Email VARCHAR(50) not null,
 Password varchar (50) not null)";

 $run2 = mysqli_query($con,$table);
 if ($run2) {
 	echo "table create success!<br>";

 }else
 {
 	echo "table create failed<br>";

 }
 $fname = $_POST['fname'];
 $sname = $_POST['sname'];
 $email = $_POST['email'];
 $pass = $_POST['password'];

$insert = "INSERT INTO regdata(Fname,Sname, Email,Password) VALUES ('$fname','$sname','$email','$pass')";
$run3 = mysqli_query($con,$insert);

if ($run3) {
	echo "insert complete!";
	header("location:index.php");
	
}
else{
	echo "insert failed";
}





?>