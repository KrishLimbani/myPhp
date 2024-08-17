<?php

$age = 12;

if($age >= 18){
    echo "your age is {$age}, so you are able for voting";
}elseif($age == 0){
    echo "invalid input";
}else{
    echo "your age is {$age}, so you are not able for voting <br>";
}


$adult = true;

if($adult){
    echo "you are adult";
}else{
    echo "you are not adult";
}

$num; // this is not working in php.
$num = null; //this is the auther way no declare null in any varible.



echo $num;
?>