<?php
$conn=mysqli_connect("localhost","root",'','freeshopping');
if(!$conn)
{
  die("server error");
}
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="select * from users where USERNAME='$user' and PASS='$pass'";
$query=mysqli_query($conn,$sql);
if(!$query)
{
    die("sql error");

}
$userdata=mysqli_fetch_row($query);
$uname=$userdata[2];
$upass=$userdata[4];

if (($user ==$uname  ) && ($pass ==$upass  ))
{
	session_start();
	$_SESSION['basic_is_logged_in'] = true;
	$_SESSION['user'] = $uname;
	$_SESSION['pass'] = $upass;
    $SID = session_id();
    header("location:userdash.html");
}	
else {
  header("location:login.php?st=w");
}
?>