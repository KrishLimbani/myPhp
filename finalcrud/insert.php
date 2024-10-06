<?php

require("connection.php");
$obj = new connect();

if(isset($_POST['sub'])){

    $iname = $_FILES["img"]["name"];
    $tname = $_FILES["img"]["tmp_name"];
    $folder = "images/".$iname;

    move_uploaded_file($tname, $folder);

    $uname = $_POST['uname'];
    
    $sql = "INSERT INTO fpra VALUES(0, '$folder', '$uname')";
    
    $run = $obj->insertdata($sql);

    if($run){
        echo "<script>
                alert('Record Inserted successfully');
                location.href='display.php';
            </script>";
    }else{
        echo "Error";
    }
}

?>


