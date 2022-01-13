<?php
class Account extends Database {
    function getAll(){
        $sql = "SELECT tblaccount.* , phanquyen.tenquyen From tblaccount , phanquyen where tblaccount.idquyen = phanquyen.idquyen";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function getUser($idMember){
        $sql = "select tblaccount.* , phanquyen.tenquyen from tblaccount , phanquyen where phanquyen.idquyen = tblaccount.idquyen and tblaccount.idMember =".$idMember;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Update_member($idMember,$quyen)
    {
        $sql = "update tblaccount set idquyen = '".$quyen."' where idMember = '".$idMember."'";
        if(mysqli_query($this->conn, $sql))
        {
               return true;
        }
       
        return false;
    }
    function getAllPermission()
    {
        $sql = "select * from phanquyen";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
   
}

?>