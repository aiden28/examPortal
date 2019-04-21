<?php
session_start(); 
if(!isset($_SESSION['username']))
header('location:adminlogin.php');
if($_SESSION['username']!='admin')
header('location:index.html');

$con=mysqli_connect('localhost','id9368722_root','hasan123@');
mysqli_select_db($con,'id9368722_onlinetest');
$q="select distinct subject from question";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>


<html>
 <head>
  <title> Create Test Paper</title>
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <link rel="stylesheet" type="text/css" href="./css/table.css" />
  <!--<script type="text/javascript" src="jquery.js"></script>-->
  <style>
      tr.odd
{
	background-color:cadetblue !important;
}
#headrow
{
	color:black;
	background-color:aqua;
}

	
	#questiontable th,td
	{
		padding-right:10px;
	}
     </style>
  <script type="text/javascript" src="testform.js"></script>
 </head>
 <body>
 <!--<form  action="http://localhost:82/test4/getquestions.php" method="post">-->
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php 
       echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="logout.php">Logout</a><br/>  
   <a href="adminhome.php">Back to Control Pannel</a><br/>
   <a href="managetests.php">Back to Manage Tests</a><br/>
    </div>
  <div id="section">
  <h1>Control Pannel:Manage Tests:Create Test Paper</h1>
  
  <table cellspacing="50px">
  <tr>   
  <td>Select Subject</td>
  <td><select name="subject" onchange="getquestions(this.value)">
  <option>select subject</option>

  <?php

 //$i=1;
 for ( $i=1; $i<=$row_count;$i++ )
  {
      $row=mysqli_fetch_array($result);
  ?>
  <option><?php echo $row['subject']; ?></option>
   
  <?php } ?>

  </select>
  </td>
  </tr>
  </table>
  <form id="testform" action="doCreatetestpaper.php" method="post">
  <div id="formdiv">
 
 
  </div>
  </form>
      <div id="errormsg"></div>
   </div>
  <div id="footer">
  Online Test 2k19
  </div>
  
  </body>
  </html>



  