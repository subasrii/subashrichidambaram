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
 <?php
  $server="localhost";
$uname="root";
$pwd="";
$db="reg";
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
    $query="select * from r1  ";
    $stmt=$con->prepare($query);
    $stmt->execute();
    $row=$stmt->fetchAll();
    echo '<table class="table table-bordered table-striped">';
     echo "<thead>";
       echo "<tr>";
        echo "<th>id</th>";
    echo"<th>name</th>";
    echo"<th>lastname</th>";
   echo" <th>password</th>";
    echo"<th>reenterpassword</th>";
    echo"<th>email</th>";
    echo"<th>mobile</th>";
    echo"<th>address</th>";
    echo"<th>gender</th>";
    echo"<th>hobbies</th>";
    echo"<th>dob</th>";
    echo"<th>country</th>";

   echo "<th>Action</th>";
      echo "</tr>";
     echo "</thead>";
   echo "<tbody>";


    foreach($row as $value)
    {
        $id=$value[0];
        $name=$value[1];
        $lastname=$value[2];
        $password=$value[3];
        $reenterpassword=$value[4];
        $email=$value[5];
        $mobile=$value[6];
        $address=$value[7];
        $gender=$value[8];
        $hobbies=$value[9];
        $dob=$value[10];
        $country=$value[11];

         echo "<tr>";
     echo "<td>" .$id . "</td>";
   echo "<td>" .$name  . "</td>";
   echo "<td>" .$lastname  . "</td>";
   echo "<td>" .$password  . "</td>";
   echo "<td>" .$reenterpassword  . "</td>";
   echo "<td>" . $email . "</td>";
   echo "<td>" . $mobile . "</td>";
   echo "<td>" . $address . "</td>";
   echo "<td>" .$gender  . "</td>";
   echo "<td>" . $hobbies . "</td>";
   echo "<td>" . $dob . "</td>";
   echo "<td>" . $country . "</td>";
      echo "<td>";
  echo '<a href="upd.php?id='. $id.'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
 echo '<a href="delete.php?id='. $id .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
 echo "</td>";
 echo "</tr>";   
        
    }
       echo "</tbody>";                            
       echo "</table>";
    ?>
      </div>
            </div>        
        </div>
    </div>
</body>
</html>