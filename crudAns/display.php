<!DOCTYPE html>
<html>

<body>

<a href="EventForm.php">Add Event</a><br><br>

    <table border="2%" width="50%">
    <tr>
    <th>Event ID</th>
    <th>Event Name</th>
    <th>Event Date</th>
    <th>Event Time</th>
    <th>Location</th>
    <th>Description</th>
    <th>EventImageURL</th>
    </tr>

    <?php
    require_once 'conn.php';

    $connection_check=new conclass1();

    $r1=$connection_check->getdata("select * from EventTable");

    while($row=mysqli_fetch_array($r1)){
        ?>
        <tr>
        <td><?php echo $row['EventID'];?></td>
        <td><?php echo $row['EventName'];?></td>  
        <td><?php echo $row['EventDate'];?></td>
        <td><?php echo $row['EventTime'];?></td>
        <td><?php echo $row['Location'];?></td>
        <td><?php echo $row['Description'];?></td>
        <td><?php echo $row['EventImageURL'];?></td>
        
        <td><a href="update_eventForm.php?uid=<?php echo $row['EventID'];?>">update</a></td>
        <td><a href="delete.php?del=<?php echo $row['EventID'];?>">delete</a></td>
         
    
    </tr>
        <?php
    }
    
    ?>
    
</table>
</body>
</html> 
<?php


