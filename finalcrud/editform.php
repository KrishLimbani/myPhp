<?php
    require ('connection.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $query = "SELECT * FROM fpra WHERE id = $id";
        $obj = new connect();
        $sql = $obj->displaydata($query);
        $row = mysqli_fetch_assoc($sql);

    } else {
        die('ID not provided');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>
<form action="edit.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label image: </label>
    <input type="file" name="e-img" value="<?= $row['i_s'] ?>">
  </div>
  <div class="form-group">
    <label >username:</label>
    <input type="text" name="e-uname" value="<?= $row['username'] ?>">
    <input type="hidden" name="e-id" value="<?= $row['id'] ?>">
  </div>
  <button type="submit" name="edit">Submit</button>
</form>
</body>
</html>