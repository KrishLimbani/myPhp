<?php 

require("connect.php");

if(isset($_POST['e-sub'])){

    $fname = $_FILES["e-img"]["name"];
    $tmpname = $_FILES["e-img"]["tmp_name"];
    $folder = "img/".$fname;

    move_uploaded_file($tmpname, $folder);

    $fname = $_POST["e-fn"];
    $lname = $_POST["e-ln"];
    $gen = $_POST["e-g"];
    $em = $_POST["e-em"];
    $pas = $_POST["e-ps"];
    $num = $_POST["e-pn"];
    $id = $_POST['e-id'];

    $check = new connection();
    $check->update($folder, $fname, $lname, $gen, $em, $pas, $num, $id);
    if($check){
        header('location: display.php');
    }
}
?>