<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
<div class="container">
  <h2>Registration form</h2>
  <form action="connection.php" method="post">
    <div class="form-group">
      <label for="email">id:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">name:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="br">Brand:</label>
      <input type="text" class="form-control" id="br" placeholder="Enter Brand Name" name="bra">
    </div>
    <div class="form-group">
      <label for="qu">Quantity:</label>
      <input type="number" class="form-control" id="qu" placeholder="Enter Brand Name" name="qut">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>