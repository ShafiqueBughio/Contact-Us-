<?php
$username=$_POST['username'];
$password=$_POST['password'];


echo $username;
echo $password;

$link=mysqli_connect("localhost","root","","contactinfo");

if($link===false){
    
die("Could not connect".mysqli_connect_error());
}

$res=mysqli_query($link,"SELECT* FROM user where username='$username' AND password='$password'");
$count=mysqli_num_rows($res);
if($count>0)
{
    header("Location:admin.php");
}
else{
    header("Location:login.php?error=user doesn't exist");
   exit();
}
mysqli_close($link);


?>






