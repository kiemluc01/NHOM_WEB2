<?php 
class rate extends Database{
    function Select_Rate(){
        $sql = "select rate.idSach,tblsach.Tensach ,avg(sosao) as sosao from rate , tblsach WHERE tblsach.idSach = rate.idSach group by idSach";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}
?>