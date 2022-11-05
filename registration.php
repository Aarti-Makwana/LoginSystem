<?php
session_start();
header('location:signin.php');
$con =mysqli_connect("localhost","root","","loginSystem");
    $name= $_POST['name'];
    $password= $_POST['password'];
    // $pass = password_hash($password,PASSWORD_BCRYPT);
$selectQuery = "select * from login where name='$name' && password='$password'";
$selectRes= mysqli_query($con,$selectQuery);
$selectCount= mysqli_num_rows($selectRes);
if($selectCount == 1){
    echo "<div class='alert alert-danger' role='alert'>
    A simple danger alert—check it out!
  </div>";
}
else{
    $insertQuery="INSERT INTO `login`(`name`, `password`) VALUES ('$name','$password')";
$selectRes= mysqli_query($con,$insertQuery);

    if($insertQuery){
       
     echo   "<div class='alert alert-success' role='alert'>
  Yout information inserted successfully!
</div>";
        
}

}
?>