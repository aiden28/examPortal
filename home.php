<?php
session_start();
if(!isset($_SESSION['username']))
header("location:adminlogin.php");
if($_SESSION['username']=='admin')
header("location:adminhome.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/layout.css">
     <link rel="stylesheet" href="./css/theme.css">
    
</head>
<body>
    <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php 
       echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="logout.php">Logout</a><br/>  
   <a href="myaccount.php">My Account</a><br/>
   <a href="testlist.php">List of Test Papers</a><br/>
    </div>
    
    <div id="section">
<h1>Home</h1>
<table cellspacing="50px">
<tr>
<td><a href="myaccount.php"><img id="myaccountimage" src="./images/myaccountimage.jpg" style="border:2px solid black; width:100px;height:100px;"><br>My Account</a>
</td>
<td><a href="testlist.php"><img id="testpaperlistimage" src="./images/testpaperslistimage.jpg" style="border:2px solid black; height:100px; width:100px;"><br>Test Paper List</a>
</td>
</tr>
</table>
</div>
                <div id="footer">
                    Online Test 2k19
                </div>
</body>
</html>