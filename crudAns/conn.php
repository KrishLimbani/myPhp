<!-- terminal : sudo/opt/lampp/lampp start  -->


<?php   
class conclass1{
        private $localhost="localhost";
        private $username="root";
        private $password="";
        private $dbname="db_ems_mgnt";

        private $dbh;

    public function __construct(){
        
    $this->dbh=mysqli_connect($this->localhost,
        $this->username,$this->password,$this->dbname);
        if($this->dbh)
        {
            echo "connected...<br/>";
        }
        else{
            echo "try again";
        }
    }
//}

//$connection_check=new conclass1();

    public function insert($query){
        $result = $this->dbh->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
    }

    public function getdata($query)
    {
        $result=mysqli_query($this->dbh,$query);
        return $result;
    }
//}

//$connection_check=new conclass1();

    public function delete($rid) 
	{ 
		$query = "DELETE FROM EventTable 
        WHERE EventID = $rid";
		
		$result = mysqli_query($this->dbh,$query);
	
		if ($result == false) {
			echo "error:cannot execute the command";
			return false;
		} 
        
        else {
			return true;
            echo 'Record deleted..';
		}
	}

    public function fetchonerecord($eventid)
	{
	$oneresult=mysqli_query($this->dbh,
    "select * from EventTable where EventID=$eventid");
	return $oneresult;
	}


//Data updation Function
public function update($eventname,$eventdate,$eventtime,
             $loc,$des,$img,$eventid)
	{
	$updaterecord=mysqli_query($this->dbh,
    "update EventTable set EventName='$eventname',
    EventDate='$eventdate',EventTime='$eventtime',
    Location='$loc',Description='$des',
    EventImageURL='$img' where EventID='$eventid' ");
	
    return $updaterecord;
	}


}


?>