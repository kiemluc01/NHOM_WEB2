<?php
class Account extends Database {
    function getAll(){
        $sql = "SELECT * From tblaccount";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}

?>