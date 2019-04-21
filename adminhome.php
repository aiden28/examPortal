<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:http:adminlogin.php');
if($_SESSION['username']!='admin')
	header('location:http:index.html');

?>
<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" type="text/css" href="./css/layout.css">
<link rel="stylesheet" type="text/css" href="./css/theme.css">
</head>
<body>
<div id="header">
<h1>Online Testing</h1>
<h2 id="hello">Hello,<?php echo $_SESSION['username'];?>!</h2>
</div>
<div id="nav">
<a href="logout.php">Logout</a><br>
<a href="managetests.php">Manage Tests</a><br>
<a href="managequestions.php">Manage Questions</a><br>
</div>
<div id="section">
<h1>Control Pannel</h1>
<table cellspacing="50px">
<tr>
<td><a href="managetests.php"><img id="testimage" src="./images/testimage.jpg" style="border:2px solid black; width:100px; height:100px;"><br>Manage Test</a></td>
<td><a href="managequestions.php"><img id="questionimage" src="./images/questionsimage.jpg" style="border:2px solid black; height:100px; width:100px;"><br>Manage Questions</a></td>
</tr>
</table>
</div>
<div id="footer">
Online Test 2k19
</div>
</body>
</html>
