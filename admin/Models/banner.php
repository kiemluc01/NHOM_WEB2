<?php 
class banner extends Database {
    function getAll()
    {
        $sql = "SELECT * FROM banner";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //select banner theo id
        function getIdBanner($idbanner)
        {
            $sql = "SELECT * FROM banner where idbanner = '".$idbanner."'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        // insert banner
    function Insert_banner($image){
        $sql = "insert into banner (img) values('".$image."')";
        $data = mysqli_query($this->conn, $sql);
        if($data)
        {
            return true;
        }
        return false;
    }
    //delete banner
    function Delete_banner($idbanner)
    {
        $sql = "delete from banner where idbanner = '".$idbanner."'";
        if(mysqli_query($this->conn, $sql))
        {
            
            return true;
        }
            return false;
    }
    // update banner
    function Update_banner($idbanner , $img)
    {
        $sql = "UPDATE banner set img = '".$img."' where idbanner = '".$idbanner."'";
        $data  = mysqli_query($this->conn, $sql);
        if($data){
            return true;
        }
        return false;
    }
}

?>