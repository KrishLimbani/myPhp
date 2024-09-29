<!DOCTYPE html>
<html>
<head>
    <title>Event</title>
</head>
<body>
    <h2>Event Form</h2>
    <form method="POST" action="insert_event.php" enctype="multipart/form-data">
        <label for="ename">Event Name:</label>
        <input type="text" id="ename" name="ename" required><br><br>
        
        <label for="edate">Event Date:</label>
        <input type="date" id="edate" name="edate" required><br><br>
        
        <label for="etime">Event Time:</label>
        <input type="time" id="etime" name="etime" required><br><br>
        
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        
        <label for="image_url">Event Image URL:</label>
        <input type="file" id="image_url" name="image_url"><br><br>
        
        <input type="submit" name="OK" value="Register Event">
    </form>
</body>
</html>
