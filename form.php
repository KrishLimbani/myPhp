<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="get">
        <label for="num1">num 1:</label><br>
        <input type="number" id="num1" name="number1"> <br>

        <label for="num2">num 2:</label><br>
        <input type="number" id="num2" name="number2"> <br>

        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php

$num1 = "{$_GET["number1"]}";
$num2 = "{$_GET["number2"]}";

echo $num1 + $num2;

?>