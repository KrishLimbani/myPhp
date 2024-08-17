<?php

$arr = array(1,2,3,4,5,);

foreach($arr as $values){
    echo "this is values {$values} <br>";
}

echo "<br>";
// foreach loop within associative array

$ass = array(1=>"red", 2=>"orenge", 3=> "green", 4=>"blue");

foreach($ass as $k => $value){
    echo "this is key{$k}, this is values {$value} <br>";
}

?>