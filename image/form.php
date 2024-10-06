<!DOCTYPE html>
<html>

<head>
    <title>image upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="3">
            <tr>
                <td>Image :</td>
                <td><input type="file" name="img" ></td>
            </tr>
            <tr>
                <td>User :</td>
                <td><input type="text" name="user" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="upload file" name="sub" ></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if(isset($_POST['sub'])){
    $fimage = $_FILES["img"]["name"];
    $tmpname = $_FILES["img"]["tmp_name"];
    $folder = "img/".$fimage; 

    move_uploaded_file($tmpname, $folder);
}



?>
