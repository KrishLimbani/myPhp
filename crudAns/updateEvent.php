<?php

require_once 'conn.php';

$connection_check = new conclass1();

if(isset($_POST['uptdata']))
{
    echo $_POST['uptdata'];
// Get the userid
//$eventid=intval($_GET['uid']);
//echo $eventid;
// Posted Values
$eventname=$_POST['ename'];
$eventdate=$_POST['edate'];
$eventtime=$_POST['etime'];
$loc=$_POST['location'];
$des=$_POST['descp'];
$img=$_POST['image_url'];
$eventid = $_POST['ueventid'];

//Function Calling
$sql=$connection_check->update($eventname,$eventdate,$eventtime,$loc,$des,$img,$eventid);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='display.php'</script>";
}
?>