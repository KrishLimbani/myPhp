<?php

$username = "krish";
$number = "123-456-789";
$name = "Krish Limbani";

$username = strlen($username); // this function is user to get length of the string 
$username = strrev($username); // this functiion is use to reverce the string
$username = trim($username); // this is use to remove white space in to the string
$username = strtoupper("krish"); // this is user no convert into upper case
$username = strtolower("KRISH"); // this is user to conert into lower case
$username = str_word_count($username);
$index = strpos($username, " ");
$username = str_replace("-","",$number); // this functin is use to replace some specific word to another word
$firstname = substr($name, 0, 5);


echo $firstname. '<br>';
echo $username. "<br>";
echo $index;


// inplode and explode function

$fullname  = "Krish Limbani";
$number = array(1,2,3,4,5,6);

$fullname = explode(" ", $fullname); // this function is use to convert stirng into array
$number = implode($number); // this function is use to convert array into string


foreach($fullname as $name){
    echo $name."<br>";
}
echo $number;


// echo $user."<br>";
// echo $username;








?>