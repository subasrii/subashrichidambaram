
<?php
$server = "localhost";
$uname="root";
$pwd= "";
$db="reg";
$con=mysqli_connect($server,$uname,$pwd,$db)or die("db not connected");
$id=$_POST['id'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$reenterpassword=$_POST['reenterpassword'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$hobbies=$_POST['hobbies'];
$dob=$_POST['dob'];
$country=$_POST['country'];
$query="insert into r1 values (null,'$name','$lastname','$password','$reenterpassword','$email','$mobile','$address','$gender','$hobbies','$dob','$country')";

if($res=mysqli_query($con,$query))
{
	echo"<script>alert('saved succesfully');window.location.href='reg.php';</script>";
}
else

{
	echo"<script>alert('error');window.location.href='reg.php';</script>";
}

?>