<!-- there are mainly three different variable scope -->

<?php
$x = 5; // global scope
function myTest() {
 // using x inside this function will generate an error
//  echo "<p>Variable x inside function is: $x</p>";
$x = 23;
echo "this x is decalre inside the function" .$x;
} 
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>