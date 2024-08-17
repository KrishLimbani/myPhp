<!-- variable => string
            integer
            float
            boolean -->

<?php

    $user = "krish limbani";
    $email = "fake@gmail.com";

    echo $user. "<br>";
    // echo "this is our email ".$email."";
    echo "this is our email {$email} <br>";

    // integer

    $price = 23;

    echo "your pizza price is: {$price} <br>";

    // float

    $tex = 5.1;

    echo "your payble tex is: {$tex} <br>";


    // boolean

    $ispayed = false;
    $islogedin = true;


    // echo "you are pay the bill: {$ispayed} <br>"; this false condition in output we can not get the output as 0
    echo "you are pay the bill: {$islogedin} <br>";
    

?>