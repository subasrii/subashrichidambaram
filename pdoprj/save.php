<?php
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
try
{
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

$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);

	$query="insert into r1(name,lastname,password,reenterpassword,email,mobile,address,gender,hobbies,dob,country)values(:name,:lastname,:password,:reenterpassword,:email,:mobile,:address,:gender,:hobbies,:dob,:country)";
	
	$stmt=$con->prepare($query);

	if($stmt->execute([':name'=>$name,':lastname'=>$lastname,':password'=>$password,':reenterpassword'=>$reenterpassword,':email'=>$email,':mobile'=>$mobile,':address'=>$address,':gender'=>$gender,':hobbies'=>$hobbies,':dob'=>$dob,':country'=>$country]))
	{
		echo"<script>alert('saved');</script>";
	}
	else
	{
		echo"<script>alert('error');</script>";
	}
	
}
catch(PDOExeception $e)
{
	echo $e->getMessage();

}
?>