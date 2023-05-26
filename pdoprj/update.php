                          <?php
                        $server="localhost";
                        $uname="root";
                        $pwd="";
                        $db="reg";
                        $con=mysqli_connect($server,$uname,$pwd,$db) or die("do not connected");
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
                        $que="update r1 set name='$name' ,lastname='$lastname',password='$password',reenterpassword='$reenterpassword',email='$email',mobile=$mobile,address='$address',gender='$gender',hobbies='$hobbies',dob=$dob,country='$country' WHERE id=$id ";
                        if($res=mysqli_query($con,$que))
                        {
                            echo"<script>alert('update successfully');window.location.href='view.php';</script>";
                        }
                        else
                        {
                            echo"<script>alert('error');window.location.href='view.php';</script>";

                        }
                        ?>

