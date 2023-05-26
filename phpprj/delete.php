<?php
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
$con=mysqli_connect($server,$uname,$pwd,$db)or die("db not connected");
$id=$_GET['id'];
$query = "delete  from r1 WHERE id='$id'";
    if($result = mysqli_query($con, $query))
    
    
     {

    echo"deleted sucess";

    }
    else
    {
    	echo"delete error";
    }

?>