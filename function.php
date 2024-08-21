<?php

// function function_name(){

// }

function greeting(){
    echo "hello good morning <br>";
}

function greeting_name($name){
    echo "hello {$name} good morning";
    return $name;
}
greeting("krish");
greeting_name("krish");


?>