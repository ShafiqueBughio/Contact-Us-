<?php
$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['phone'];
$feedback=$_POST['feedback'];
echo $fname ;
echo $contact;
echo $feedback;

$link=mysqli_connect("localhost","root","","contactinfo");

if($link===false){
    
die("Could not connect".mysqli_connect_error());
}

$sql="INSERT INTO contact(fname, email, contact, feedback) VALUES ('$fname','$email','$contact','$feedback')";
if (mysqli_query($link,$sql)){
    header("Location:contactform.php?error=Form submitted succesfully");
    exit();
}
else{
    echo"fail to execute" .mysqli_error($link);
}

mysqli_close($link);
?>
