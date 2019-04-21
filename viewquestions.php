<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:adminlogin.php');
if($_SESSION['username']!='admin')
	header('location:index.html');

$con=mysqli_connect('localhost','id9368722_root','hasan123@');
mysqli_select_db($con,'id9368722_onlinetest');
$q="select * from question";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
<html>
<head>
<title>View Questions</title>
<link rel="stylesheet" type="text/css" href="./css/layout.css">
<link rel="stylesheet" type="text/css" href="./css/theme.css">
<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>
<div id="header">
<h1>Online Testing</h1>
<h2 id="hello">Hello,<?php echo $_SESSION['username']; ?>!</h2>
</div>
<div id="nav">
<a href="logout.php">Logout</a><br>
<a href="adminhome.php">Back to Control Pannel</a><br>
<a href="managequestions.php">Back to Manage Questions</a><br>
</div>
<div id="section">
<h1>Control Pannel:Manage Questions:View Question</h1>
<div id="tablediv">
<table id="questiontable">
<tr id="headrow">
<th>S.No.</th>
<th>Question</th>
<th>option a</th>
<th>option b</th>
<th>option c</th>
<th>option d</th>
<th>Answer</th>
<th>Subject</th>
</tr>
<?php 
for($i=1;$i<=$row_count;$i++)
{
 $row=mysqli_fetch_array($result);


?>
<tr class="<?php if($i%2==0) echo "odd"; ?>">
<td><?php echo $row['queid']; ?></td>
<td><?php echo $row['que']; ?></td>
<td><?php echo $row['optiona']; ?></td>
<td><?php echo $row['optionb']; ?></td>
<td><?php echo $row['optionc']; ?></td>
<td><?php echo $row['optiond']; ?></td>
<td><?php echo $row['ans']; ?></td>
<td><?php echo $row['subject']; ?></td>
</tr>
<?php } ?>
</table>
</div>
</div>
<div id="footer">
Online Test 2k19
</div>
</body>
</html>