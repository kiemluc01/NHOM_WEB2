<?php 
class banner extends Database {
    function getAll()
    {
        $sql = "SELECT * FROM banner";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Insert_banner($image){
        $sql = "insert into banner (img) values('".$image."')";
        $data = mysqli_query($this->conn, $sql);
        if($data)
        {
            return true;
        }
        return false;
    }
    function Delete_banner($idbanner)
    {
        $sql = "delete from banner where idbanner = '".$idbanner."'";
        if(mysqli_query($this->conn, $sql))
        {
            
            return true;
        }
            return false;
    }
}

?>