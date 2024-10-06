<?php

require("connection.php");

$obj = new connect();

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
            <th>ID</th>
            <th>photo</th>
            <th>username</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

<?php
        $sql = "SELECT * FROM fpra";
        $run = $obj->displaydata($sql);

        while($row = mysqli_fetch_assoc($run)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="<?= $row['i_s'] ?>" width="100px"></td>
                <td><?= $row['username'] ?></td>
                <td><a href="editform.php?id=<?= $row['id'] ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
            </tr>
<?php
        }
?>
    </table>
</body>
</html>