<?php
require("connect.php");

$query = "SELECT * FROM regi";
$data = mysqli_query($conn, $query);

$row = mysqli_num_rows($data);


if($row != 0){
    ?>

    <table border="1">
        <tr>
            <th>first name</th>
            <th>last name</th>
            <th>gender</th>
            <th>email</th>
            <th>password</th>
            <th>phone number</th>
        </tr>
    <?php
    while($display = mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$display['firstname']."</td>
                <td>".$display['lastname']."</td>
                <td>".$display['gender']."</td>
                <td>".$display['email']."</td>
                <td>".$display['password']."</td>
                <td>".$display['number']."</td>
            </tr>";
    }
}



?>
    </table>