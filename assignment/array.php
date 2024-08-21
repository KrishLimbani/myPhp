<?php

// 1)

$color = array('white','green','red');

foreach($color as $values){
    echo $values."<br>";
}

echo "<ul> <li>$color[0]</li>
           <li>$color[1]</li>
           <li>$color[2]</li>     
     </ul>";

// 2) sort an array

$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($arr);
ksort($arr);

arsort($arr);
krsort($arr);

foreach($arr as $keys => $v){
    echo "{$keys} and {$v} <br>";
}


// 3) average of temreture

$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$result = null;
foreach($temp as $values){
        $result += $values;
}

$avg = $result/count($temp);
echo "total of temperature: {$result} <br>";
echo "average of temperature: {$avg} <br>";


// 4) Write a PHP script to get the largest key in an array.

$one = array(1=>"krish",2=>"harsh",3=>"pavaan",4=>"maitri",5=>"krishna");
$max = 0;
foreach($one as $key=> $values){
    if($key > $max){
        $max = $key;
    }
}

//5) find max using function

$max = max($temp);
echo "maximum: $max <br>";

//6) find minimum values using function

$min = min($temp);
echo "minimum: {$min} <br>";

echo "maximun number of array key: {$max}";

// 7) merge two array into single array
$array = array(0=>"31",1=>"41",2=>"39",3=>"40");

$merge = array_merge($array, $one);

echo "this is single array within two different array";
print_r($merge);


// to campare two array

$arr = array(1,2,3,4,5);
$arr1 = array(1,2,3,4,5);
if($arr == $arr1){
    echo "true";
    }


?>