<?php

    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $cpass = $_POST["cpassword"];

// Database connection

$con = new mysqli('localhost','root','','form');
if($con->connect_error){
    die('connection failed : '.$con->connect_error);
}else{
    $stmt = $con->prepare("insert into registration(firstName,lastName,gender,email,password,number)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$number);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $con->close();  
}



?>