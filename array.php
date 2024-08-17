<?php

// there are mainly two type of array in php
// 1) numeric/indexed array
// 2) associative array

// 1) numeric/indexed array

$arr = array(1,2,3,4,5,6,7,8,9);
echo 'this is first'.$arr[0];
echo '<br>';
$arrlength = count($arr);

for($i = 0; $i <= $arrlength; $i++){
    echo "{$arr[$i]} <br>";
}

foreach($arr as $key => $value){
    echo "this is key {$key} <br>";
    echo "this is value {$value} <br>";
}

// 2) associative array

$asoArr = array('krish'=>'gray', 'pavaan'=>'red', 'rohan'=>'green', 3 => "this");
echo $asoArr['krish'];
echo "<br>";
echo $asoArr["pavaan"];
echo "<br>";
echo $asoArr['rohan'];
echo "<br>";
echo $asoArr[3];

foreach($asoArr as $key => $value){
    echo "this is key {$key} <br>";
    echo "this is value {$value} <br>";
}



$food = array("apple","pineapple","banana","coconut");

array_push($food, "orange", "kiwi");
array_pop($food);
array_shift($food);



foreach($food as $value){
    echo $value."<br>";
}

echo "this is array in reverse <br>";

$reverse_food = array_reverse($food);

foreach($reverse_food as $values){
    echo $values. "<br>";
}


$capitals = array("india" => 'new delhi', "usa" => 'washington D.C.', "japan"=>'kyoto', "south korea"=>'seoul');

$capitals["china"] = "biejing"; // this is use for add new element in associative array
// array_pop($capitals);
// array_shift($capitals);

$keys = array_keys($capitals);
$values = array_values($capitals);
$flip = array_flip($capitals);


foreach($flip as$keys => $values){
    echo "this is key{$keys} and this is values {$values} <br>";
}

?>

