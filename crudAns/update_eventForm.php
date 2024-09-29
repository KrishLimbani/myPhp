<?php

require_once 'conn.php';

$connection_check = new conclass1();

// Get the eventid
$eventid=intval($_GET['uid']);
echo $eventid;

$sql=$connection_check->fetchonerecord($eventid);
$cnt=1;

while($row=mysqli_fetch_array($sql))
  {
    
    echo $row['Description'];
  ?>

<form name="updateEvent" method="post" action="updateEvent.php">
        <label for="ename">Event Name:</label>
        <input type="text" value="<?php echo htmlentities($row['EventName']);?>" name="ename" required><br><br>
        
        <label for="edate">Event Date:</label>
        <input type="date" value="<?php echo htmlentities($row['EventDate']);?>" name="edate" required><br><br>
        
        <label for="etime">Event Time:</label>
        <input type="time" value="<?php echo htmlentities($row['EventTime']);?>" name="etime" required><br><br>
        
        <label for="location">Location:</label>
        <input type="text" value="<?php echo htmlentities($row['Location']);?>" name="location" required><br><br>
        
        <label for="description">Description:</label>
        <textarea name="descp" required><?php echo htmlentities($row['Description']);?></textarea><br><br>
        
        <label for="image_url">Event Image URL:</label>
        <input type="file" value="<?php echo htmlentities($row['EventImageURL']);?>" name="image_url"><br><br>
        
        <input type="hidden" name="ueventid" value="<?php echo $eventid; ?>">

        <input type="submit" name="" value="Update">
    </form>
  

  <?php
  }
  ?>uptdata