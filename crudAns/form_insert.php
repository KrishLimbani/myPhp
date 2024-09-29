<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
</head>
<body>
    <h2>Customer Registration Form</h2>
    <form method="POST" action="insert_customer.php">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br><br>
        
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br><br>
        
        <label for="gen">Gender:</label>
        <input type="radio" id="male" name="gen" value="Male" required> Male
        <input type="radio" id="female" name="gen" value="Female"> Female<br><br>
        
        <label for="eml">Email:</label>
        <input type="email" id="eml" name="eml" required><br><br>
        
        <label for="pwd">Password:</label>
        <input type="password" id="pwd" name="pwd" required><br><br>
        
        <label for="mno">Mobile Number:</label>
        <input type="text" id="mno" name="mno" required><br><br>
        
        <label for="addr">Address:</label>
        <input type="text" id="addr" name="addr"><br><br>
        
        <label for="event_id">Event ID:</label>
        <input type="number" id="event_id" name="event_id" required><br><br>
        
        <input type="submit" name="OK" value="Register">
    </form>
</body>
</html>

