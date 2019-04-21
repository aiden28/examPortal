<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','id9368722_root','hasan123@');
mysqli_select_db($con,'id9368722_onlinetest');
$q="select * from user where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
if($row_count==1)
{
	$row=mysqli_fetch_array($result);
	$_SESSION['username']=$row['username'];
	header('location:adminhome.php');
	
}
else
  
	header('location:adminlogin.php');
    

?>