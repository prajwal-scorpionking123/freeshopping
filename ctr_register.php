<?php

$conn=mysqli_connect("localhost","root",'','freeshopping');
if(!$conn)
{
  die("cannection failed");
}
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
// echo $fullname;
// echo $username;
// echo $email;
// echo $password;
$sql="INSERT INTO users (FULLNAME,USERNAME,EMAIL,PASS)VALUES('$fullname','$username','$email','$pass')";
$query=mysqli_query($conn,$sql);
if(!$query)
{
    die("error in sql query");
}
else
{
header('location:login.html');    
}
?>