<?php
session_start();
if(!isset($_SESSION['username']))
header('location:adminlogin.php');
if($_SESSION['username']=='admin')
header('location:adminhome.php');

$con=mysqli_connect('localhost','id9368722_root','hasan123@');
mysqli_select_db($con,'id9368722_onlinetest');
$q="select * from test";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['username'];
?>
<html>
<head>
<title>Test List</title>
<link rel="stylesheet" type="text/css" href="./css/layout.css">
<link rel="stylesheet" type="text/css" href="./css/theme.css">
<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>
<div id="header">
<h1>Online Testing</h1>
<h2 id="hello">Hello,<?php echo $_SESSION['username']; ?>!</h2>
</div>
<div id="nav" style="height:601">
<a href="logout.php">Logout</a><br>
<a href="home.php">Back to Home</a><br>
<a href="myaccount.php">My Account</a><br>
    </div>
    <div id="section">
        <h1>Home:Test List</h1>
        <p>Click on the<span style="color:olive;font-weight:bold;">Test Id</span>to attempt the test paper</p>
        <div id="tablediv">
            <table id="questiontable">
                <tr id="headrow">
                    <th>Test Id</th>
                    <th>Subject</th>
                    <th>Total Question</th>
                    </tr>
 <?php
    for($i=1;$i<=$row_count;$i++)
    {
        $row=mysqli_fetch_array($result);
        $q1="select * from test_question where testid=".$row['testid'];
        $result1=mysqli_query($con,$q1);
        $row_count1=mysqli_num_rows($result1);
                
                ?>
                <tr class="<?php if($i%2==0) echo 'odd';?>">
                <td><a href="testpaper.php?testid=<?php echo $row['testid']; ?>"><?php echo $row['testid']; ?></a></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row_count1; ?></td>
           </tr>
              <?php  } ?>
            </table>
        </div>
        </div>
                        <div id="footer">
                    Online Test 2k19
                </div>
    </body>
</html>