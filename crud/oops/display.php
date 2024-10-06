<?php
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>photo</th>
            <th>first name</th>
            <th>last name</th>
            <th>gender</th>
            <th>email</th>
            <th>password</th>
            <th>phone number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

<?php
    $query = "SELECT * FROM registration";
    $obj = new connection();
    $run = $obj->display($query);

    while($row = mysqli_fetch_assoc($run)){
        ?>
        <tr>
            <td><?php echo "<img src= '".$row['img_source']."' height=100px>" ?></td>
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['number'];?></td>
            <td><a href="editForm.php?id=<?= $row['id'] ?>">Edit</a></td>
            <td><a href="delete.php?id= <?php echo $row['id'] ?>">Delete</a></td>
        </tr>
<?php
    }
?>
    </table>
</body>
</html>