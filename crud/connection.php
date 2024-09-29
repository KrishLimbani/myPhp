<?php

    class connection{

        private $local = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $database = 'eventdb';

        private $conn;


        public function __construct(){
            $this->conn = mysqli_connect($this->local,$this->user,$this->pass,$this->database);

            if($this->conn){
                echo 'connection successfully';
            }else{
                die('database connection failed');
            }
        }

    }


$connection_check = new connection();



?>