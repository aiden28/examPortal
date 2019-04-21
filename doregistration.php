<?php
  
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','id9368722_root','hasan123@');
mysqli_select_db($con,'id9368722_onlinetest');
$q="insert into user(username,password) values('$username','$password')";
$result=mysqli_query($con,$q);

mysqli_close($con);
header("location:userlogin.php");
?>