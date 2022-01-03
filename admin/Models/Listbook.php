<?PHP
class Listbook extends Database{
    function getAll(){
        $sql = " select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Find_book($str){
        $sql = "select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc and ( Tensach like '%".$str."%' or Tendanhmuc like '%".$str."%' or Tacgia like '%".$str."%' )";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Insert_book($imgSach , $Tensach, $Tacgia , $NXB , $idDanhmuc,$tomtatND){
        $sql = "insert into tblsach (imgSach ,Tensach , Tacgia , NXB , idDanhmuc) values('$imgSach' , '$Tensach' , '$Tacgia' ,'$NXB' ,'$idDanhmuc')";
        $sqlBook = mysqli_query($this->conn,"select * from tblsach where Tensach = '$Tensach'");
        if($sqlBook->num_rows > 0)
        {
            echo '<script>alert("Sách đã tồn tại")</script>';
        }else{
            if(mysqli_query($this->conn, $sql)){
                echo '<script>alert("thêm xong sách")</script>';
                $sqlselect = "select * fron tblsach";
                $idSach='';
                $result = mysqli_query($this->conn, $sqlselect);
                if($result->num_rows > 0)
                while($row = mysqli_fetch_assoc($result)){
                    $idSach = $row['idSach'];
                }
                $sqlupdate  = "update chitietsach set tomtatND =N'".$tomtatND." where idSach = ".$idSach;
                if(mysqli_query($this->conn, $sqlupdate)){
                    echo '<script>alert("thêm xong chi tiết")</script>';
                    return true;
                }
                    
            }
        }
        return false;
    }
}