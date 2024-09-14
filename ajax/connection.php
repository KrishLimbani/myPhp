<?php

$name = $_POST['name'];
$brand = $_POST['bra'];
$quantity = $_POST['qut'];

$conn = new mysqli('localhost','root','','ajax');

$stmt = $conn->prepare('INSERT INTO form(name,brand,quantity) values(?,?,?)');

$stmt->bind_param('ssi',$name,$brand,$quantity);

if($stmt->execute()){
    echo 'inserted';
}else{
    echo 'error';
}

?>