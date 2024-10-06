<?php
require("connection.php");
$obj = new connect();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($obj->delete($id)){
        header('location: display.php');
    }else{
        die("id not available");
    }
}

?>