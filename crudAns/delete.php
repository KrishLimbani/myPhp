<?php //Deletion

require_once 'conn.php';

$connection_check = new conclass1();

if(isset($_GET['del'])){
// Geeting deletion row id
$rid=$_GET['del'];

$sql=$connection_check->delete($rid);

if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='display.php'</script>";
}
    
}
?>