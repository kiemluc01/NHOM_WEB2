<?PHP
class Listbook extends Database{
    function getAll(){
        $sql = " select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Find_book($str){
        $sql = "select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc and ( Tensach like N'%".$str."%' or Tendanhmuc like N'%".$str."%' or Tacgia like N'%".$str."%' )";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Insert_book($imgSach , $Tensach, $Tacgia , $NXB , $idDanhmuc , $tomtatND){
        $sql = "insert into tblsach (imgSach ,Tensach , Tacgia , NXB , idDanhmuc) values('".$imgSach."' , N'".$Tensach."' , N'".$Tacgia."' ,'".$NXB."' ,'".$idDanhmuc."')";
        $data = mysqli_query($this->conn, $sql);
        $sqlBook = mysqli_query($this->conn,"select * from tblsach where Tensach = '$Tensach'");
        if($sqlBook->num_rows > 0)
        {
            echo '<script>alert("Sách đã tồn tại")</script>';
        }else{
            if($data)
            {
                $sqlselect = "select * from tblsach";
                $idSach='';
                $result = mysqli_query($this->conn, $sqlselect);
                if($result->num_rows > 0)
                {
                    while($row = mysqli_fetch_assoc($result)){
                        $idSach = $row['idSach'];
                    }
                }
                $sqlupdate  = "update chitietsach set tomtatND = N'".$tomtatND."' where idSach = '".$idSach."'";
                if(mysqli_query($this->conn, $sqlupdate)){
                    return true;
                }
                    
            }
            return false;
        }
    }
    function Delete_book($idSach)
    {
        $sql = "delete from tblsach where idSach = '".$idSach."'";
        
        if( mysqli_query($this->conn, $sql))
        {
            
            return true;
        }
            return false;
    }
    function getBook($idSach){
        $sql = " select a.*,b.Tendanhmuc,c.tomtatND from tblsach as a, tbldanhmuc as b, chitietsach as c where a.idDanhmuc = b.idDanhmuc and a.idSach = c.idSach and a.idSach =".$idSach;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Update_book($idSach ,$imgSach , $Tensach, $Tacgia , $NXB , $idDanhmuc , $tomtatND)
    {
        $sql = "update tblsach set imgSach = '".$imgSach."' , Tensach = N'".$Tensach."' , Tacgia = N'".$Tacgia."' ,NXB = '".$NXB."' , idDanhmuc = '".$idDanhmuc."' where idSach = '".$idSach."'";
        $updateChitiet = "update chitietsach set tomtatND = N'".$tomtatND."' where idSach = '".$idSach."'";
        if(mysqli_query($this->conn, $sql))
        {
           if(mysqli_query($this->conn, $updateChitiet))
           {
           
               return true;
           }
        }
       
        return false;
        
    }
    
}