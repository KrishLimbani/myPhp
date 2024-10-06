<?php

class connect{
    private $host = 'localhost';
    private $user = 'root';
    private $pass ='';
    private $db= 'final';
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if(!$this->conn){
            die ("connection fail ");
        }else{
            echo "connection successfully <br>";
        }
    }

    public function insertdata($query){
        return mysqli_query($this->conn, $query);
    }

    public function displaydata($query){
        return mysqli_query($this->conn, $query);
    }

    public function delete($id){
        $sql = "DELETE FROM fpra WHERE id=$id";
        return mysqli_query($this->conn,$sql);
    }

    public function update($photo,$uname, $id){
        $query = "UPDATE fpra SET i_s='$photo', username='$uname' WHERE id=$id ";
        return mysqli_query($this->conn, $query);
    }

}

// $connection_check = new connect();

?>