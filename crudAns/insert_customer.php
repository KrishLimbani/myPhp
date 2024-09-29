
<?php
require_once 'conn.php' ;

$connection_check = new conclass1();

if (isset($_POST['OK'])) {
    $finame = $_POST['fname'];
    $lstname = $_POST['lname'];
    $mail = $_POST['eml'];
    $pass = $_POST['pwd'];
    $mobileno = $_POST['mno'];
    $addr = $_POST['addr'];
    $gend = $_POST['gen'];
    $profilephoto = $_POST['img'];
    $event_id = $_POST['event_id'];

    $sql = $connection_check->insert("INSERT INTO CustomerRegistrationTable (FirstName,LastName, Email,Password,PhoneNumber, Address,Gender,ProfilePhotoURL,EventID) 
    VALUES ('$finame', '$lstname', '$mail', '$pass', '$mobileno', '$addr', '$gend','$profilephoto','$event_id')");

    if ($sql) {
        echo "Customer Registered Successfully!";
    } else {
        echo "Registration Failed, Please Try Again.";
    }
}
?>
