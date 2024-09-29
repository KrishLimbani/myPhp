<?php
require_once 'conn.php';

$connection_check = new conclass1();

if (isset($_POST['OK'])) {
    $ename = $_POST['ename'];
    $edate = $_POST['edate'];
    $etime = $_POST['etime'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    $sql = $connection_check->insert("INSERT INTO EventTable
     (EventName, EventDate, EventTime, Location, Description, EventImageURL) 
    VALUES ('$ename', '$edate', '$etime', '$location', 
    '$description', '$image_url')");

    if ($sql) {
        echo "<script>alert('Record Inserted successfully');</script>";
        echo "<script>window.location.href='display.php'</script>";
    } else {
        echo "<script>window.location.href='display.php'</script>";
    }
}
?>
