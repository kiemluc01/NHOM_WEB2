<?php 
class banner extends Database {
    function getAll()
    {
        $sql = "SELECT * FROM banner";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}

?>