<?php

require("connect.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM registration WHERE id = $id";
    $obj = new connection();
    $sql = $obj->display($query);
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
    <title>Registration Form</title>
    <style>
        /* Basic styles for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 50px;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Registration Form</h2>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <label >Image:</label>
    <input type="file"  name="e-img" value="<?= $row['img_source'] ?>" require>
    <!-- First Name Field -->
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="e-fn" value="<?= $row['firstname'] ?>" required>

    <!-- Last Name Field -->
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="e-ln" value="<?= $row['lastname'] ?>" required>

    <!-- Gender Field -->
    <label for="gender">Gender:</label>
    <select id="gender" name="e-g" value="<? $row['gender'] ?>" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>

    <!-- Email Field -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="e-em" value="<?= $row['email']?>" required>

    <!-- Password Field -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="e-ps" value="<?= $row['password']?>" required>

    <!-- Phone Number Field -->
    <label for="phonenumber">Phone Number:</label>
    <input type="tel" id="phonenumber" name="e-pn" value="<?=$row['number']?>" required pattern="[0-9]{10}" title="Ten digit phone number">

    <!-- Submit Button -->
    <input type="submit" value="submit" name="e-sub">

    <input type="hidden" name="e-id" value="<?= $row['id'] ?> ">
</form>

</body>
</html>

