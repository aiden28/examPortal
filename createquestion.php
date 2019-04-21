<?php
session_start();
if(!$_SESSION['username'])
header('location:userlogin.php');
if($_SESSION['username']!='admin')
header('location:index.html');
?>
<html>
<title>Create Question</title>
<head>
<link rel="stylesheet" type="text/css" href="./css/layout.css">
<link rel="stylesheet" type="text/css" href="./css/theme.css">
<script type="text/javascript" src="./js/questionform.js">
</script>
</head>
<body>
<div id="header">
<h1>Online Testing</h1>
<h2 id="hello">Hello,<?php echo $_SESSION['username']; ?>!</h2>
</div>
<div id="nav" style="height : 1000px">
<a href="logout.php">Logout</a><br>
<a href="adminhome.php">Back to Control Pannel</a><br>
<a href="managequestions.php">Back to Manage Questions</a><br>
</div>
<div id="section">
<h1>Control Pannel:Manage Questions:Create Question</h1>
<form action="doCreateQuestion.php" method="post">
<table cellspacing="50px">
<tr>
  <td></td>  <td>  <span id="errormsg"></span></td>
</tr>
<tr>
<td>Question Statement:</td>
<td><textarea style="width:450px;" id="que1" name="que"></textarea>
</td>
</tr>
<tr>
<td>Option a</td>
<td><textarea style="width:450px" id="optiona1" name="optiona">
</textarea></td>
</tr>
<tr>
<td>Option b</td>
<td><textarea style="width:450px" id="optionb1" name="optionb">
</textarea></td>
</tr>
<tr>
<td>Option c</td>
<td><textarea style="width:450px" id="optionc1" name="optionc">
</textarea></td>
</tr>
<tr>
<td>Option d</td>
<td><textarea style="width:450px" id="optiond1" name="optiond">
</textarea></td>
</tr>
<tr>
<td>Correct Answer</td>
<td><input type="radio" name="ans" value="a">a
<input type="radio" name="ans" value="b">b
<input type="radio" name="ans" value="c">c
<input type="radio" name="ans" value="d">d
</td>
</tr>
<tr>
<td>Subject</td>
<td><input type="text" id="subject1"name="subject"></td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="Create" onclick="return validateform()"></td>
  
</tr>
</table>

</form>
</div>
<div id="footer">
Online Test 2k19
</div>
</body>
</html>

