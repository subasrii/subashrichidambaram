
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">view Details</h2>
                       
                    </div>
<table class="table table-bordered table-hover">
                <thead class="table-dark">
                <th>id</th>
                <th>name</th>
                <th>lastname</th>
                <th>password</th>
                <th>reenderpassword</th>
                <th>email</th>
                <th>mobile</th>
                <th>address</th>
                <th>gender</th>
                <th>hobbies</th>
                <th>dob</th>
                <th>country</th>
                <th>action</th>
                </thead>
<tbody> 
<?php
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
$con=mysqli_connect("$server","$uname","$pwd","$db")or die("db not connected");
$que="select * from r1 w";
$res=mysqli_query($con,$que);
while($row=mysqli_fetch_array($res))
{
    echo"<tr>";

    echo"<td>".$row[0]."</td>";
    echo"<td>".$row[1]."</td>";
    echo"<td>".$row[2]."</td>";
    echo"<td>".$row[3]."</td>";
    echo"<td>".$row[4]."</td>";
    echo"<td>".$row[5]."</td>";
    echo"<td>".$row[6]."</td>";
    echo"<td>".$row[7]."</td>";
    echo"<td>".$row[8]."</td>";
    echo"<td>".$row[9]."</td>";
    echo"<td>".$row[10]."</td>";
    echo"<td>".$row[11]."</td>";
     echo "<td>";
  echo '<a href="update.php?id='. $row[0].'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
 echo '<a href="delete.php?id='. $row[0].'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
 echo "</td>";
    echo"</tr>";
}
?>
</tbody>
</tabel>
</html>