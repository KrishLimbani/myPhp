<?php
    
    $conn = new mysqli('localhost','root','','db_food_order');

    if(!$conn){
        die("connection failed");
    }else{
        echo "connection successfully";
    }

?>

