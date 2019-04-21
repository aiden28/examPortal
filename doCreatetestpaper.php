<?php
session_start();
if(!isset($_SESSION['username']))
    header('location:adminlogin.php');
if($_SESSION['username']!='admin')
    header('location:index.html');
$size=sizeof($_POST);
for($j=1,$i=1;$i<=$size;$i++)
{
    $index="que".$j;
    if(!isset($_POST[$index]))
    {
        $j++;
        $i--;
        continue;
    }
    else
    {
        $j++;
        $queid[$i]=$_POST[$index];
    }
}
$con=mysqli_connect('localhost','id9368722_root','hasan123@');
mysqli_select_db($con,'id9368722_onlinetest');
$q="select subject from question where queid=$queid[1]";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$subject=$row['subject'];
$q1="insert into test (subject) values ('$subject')";
echo $subject;
mysqli_query($con,$q1);
$q2="select max(testid) from test";
$result2=mysqli_query($con,$q2);
$row2=mysqli_fetch_array($result2);
$testid=$row2[0];
for($i=1;$i<=$size;$i++)
{
    $q3="insert into test_question(queid,testid) values ($queid[$i],$testid)";
    mysqli_query($con,$q3); 
}
mysqli_close($con);
header('location:managetests.php');
?>
