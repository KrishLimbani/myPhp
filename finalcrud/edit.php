<?php
    require 'connection.php';

    if (isset($_POST['edit'])) {
        $e_name = $_POST['e-uname'];
        $e_id = $_POST['e-id'];

        $path = "images/" . $_FILES['e-img']['name'];
        move_uploaded_file($_FILES['e-img']['tmp_name'], $path);

        $obj = new connect();
        $sql = $obj->update($path,$e_name,$e_id);
        
        if ($sql) {
            echo "<script>
                alert('Record updated successfully');
                location.href='display.php';
            </script>";
    }else{
        die("error");
    }

    }

?>




