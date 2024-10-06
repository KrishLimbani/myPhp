<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label image: </label>
    <input type="file" name="img" >
  </div>
  <div class="form-group">
    <label >username:</label>
    <input type="text" name="uname">
  </div>
  <input type="hidden" name = "e-id" value="<?= $row['id'] ?>">
  <button type="submit" name="sub">Submit</button>
</form>
</body>
</html>