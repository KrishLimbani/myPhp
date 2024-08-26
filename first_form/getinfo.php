<?php

$conn = new mysqli('localhost','root','','form');

$sql = "SELECT * FORM REGISTRAION";

$result = mysqli_query($conn ,$sql);
echo $result;

mysqli_close($conn);

?>