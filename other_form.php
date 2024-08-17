<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="other_form.php" method="post">
        <label>quantity</label>
        <input type="text" name="quantity" >
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $item = "pizz";
    $price = 5.12;
    $total = null;

    $quantity = $_POST["quantity"];
    $total = $quantity * $price;


    echo "you have ordered {$quantity} X {$item}s <br> ";
    echo "your total is \${$total}"
    

?>