<?php 
    class Database extends WebConfig{
        var $conn;
        function __construct(){
            $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
            mysqli_set_charset($this->conn,'utf-8');
        }
    }
?>