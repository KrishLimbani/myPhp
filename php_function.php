<?php
    // isset() this function return true if a variable is declare and not null
    // empty() this function return true if a  variable is not decalare, flase, null, " "

    $variable = "krish";
    $username;
    $username = false;
    $username = null;

    if(isset($variable)){
        echo "this variable is set <br>";
    }else{
        echo "this variable is not set <br>";
    }

    if(empty($username)){
        echo "this variable is empty <br>";
    }else{
        echo "this variable is not empty <br>";
    }

