<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "form";

    $conn = mysqli_connect($server, $user, $pass, $database);
    if($conn){
        echo "connection successfully";
    }else{
        echo "connection failled...";
    }

?>