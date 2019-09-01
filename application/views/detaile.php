<?php 

$con = mysqli_connect('localhost','root','','amit');

if (isset($_POST['submit'])) {

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO usersdata(fname,sname,email,password) VALUES('$fname','$sname','$email','$password')";

if(mysqli_query($con,$query)){
	header("Location:registeration.php");
}
else{
	echo "insert failed!";
	header("Location:registeration.php");
}

}

?>