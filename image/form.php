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

$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];

$folder = "img/".$filename;

if(move_uploaded_file($tempname, $folder)){
    echo "file uploaded";
}else{
    echo "file not uploaded";
}
 

// echo " <img src='$folder' height='100px' width='100px'>";


?>
