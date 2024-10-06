<?php

class connection{
    private $host = 'localhost';
    private $user =  'root';
    private $pass = '';
    private $db = 'oops';
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if(!$this->conn){
            die ("connection fail ");
        }else{
            echo "connection successfully <br>";
        }
    }
    
// insert data function
    public function insertdata($inquery){
        return mysqli_query($this->conn, $inquery);
    }

// display data function
    public function display($disquery){
        return mysqli_query($this->conn, $disquery);
    }


//  delete data function
    public function delete($id){
        $sql = "DELETE FROM registration WHERE id=$id";
        return mysqli_query($this->conn,$sql);
        }

// update form function
    public function update($photo, $fname, $lname, $gen,$em,$pass,$num,$id){
        $sql = "UPDATE registration set img_source = '$photo', firstname = '$fname', lastname = '$lname', gender = '$gen', email = '$em',  password = '$pass', number = '$num' WHERE id = $id ";
        return mysqli_query($this->conn, $sql);
    }


}

?>