<?php

$conn = mysqli_connect('localhost','root','','form');

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connected to database <br>";
}

if(isset($_POST['sub'])){

    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $num = $_POST['phonenumber'];

    $query = "INSERT INTO regi values('$first','$last','$gender','$email','$pass','$num')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "data inserted";
    }else{
        echo  "data not inserted";
    }
}


    // $query = "INSERT INTO regi values('$first','$last'.'$gender','$email','$pass'.'$num')";
    // $result = mysqli_query($conn, $query);

?>