<?php
$username=$_GET['username'];
$con=mysqli_connect('localhost','id9368722_root','hasan123@');
mysqli_select_db($con,'id9368722_onlinetest');
$q="select username from user where username='$username'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
if($row_count==1)
    echo "user";
else
    echo "notUser";
?>