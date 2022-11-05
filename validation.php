<?php
session_start();
$con =mysqli_connect("localhost","root","","loginSystem");
   $name=$_POST['name'];
   $password=$_POST['password'];
    // $pass = password_hash($password,PASSWORD_BCRYPT);
$selectQuery = "select * from login where name='$name' && password='$password'";
$selectRes= mysqli_query($con,$selectQuery);
$selectCount= mysqli_num_rows($selectRes);
// echo  $selectCount;
if($selectCount == 1){
 $_SESSION['userName'] = $name;
header('location:home.php');
}
else{
header('location:signin.php');
}

?>