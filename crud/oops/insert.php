<?php
require("connect.php");

$obj = new connection();
if(isset($_POST['sub'])){

// image  upload code here

    $fimage = $_FILES["upimg"]["name"];
    $tmpname = $_FILES["upimg"]["tmp_name"];
    $folder = "img/".$fimage; 
    move_uploaded_file($tmpname, $folder);


    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pnumber = $_POST['phonenumber'];

    $insert = "INSERT INTO registration values(0,'$folder', '$fname' , '$lname', '$gender', '$email', '$pass', '$pnumber')";
    $run = $obj->insertdata($insert);

    if($run){
        echo "Registration Successfull";
    }else{
        echo "Registration faild";
    }
}

?>