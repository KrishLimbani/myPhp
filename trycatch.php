<?php
try {
    $num = 10;
    $num2 = 0;

    if ($num2 !== 0) {
        $ans = $num / $num2;
        echo $ans;
    } else {
        echo "Unable to divide: Division by zero!";
    }
} catch (Exception $e) {
    echo $e;
}
?>
