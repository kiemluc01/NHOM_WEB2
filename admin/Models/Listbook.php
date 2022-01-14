<?PHP
class Listbook extends Database{
    function getAll(){
        $sql = " select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function getAllBook($danhmuc){
        $sql = "select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc and a.idDanhmuc = '".$danhmuc."'";
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
    // Thống kê
    function Count_book(){
        $sql = "SELECT COUNT(idSach) as tongsosach FROM tblsach";
        $dem =0;
        $result = mysqli_query($this->conn, $sql);
        if($result->num_rows>0){
            
            while($row = $result->fetch_assoc()){
                $dem = $row['tongsosach'];
            }
        }
        return $dem;
    }
    function Count_find_book($str){
        $dem=0;
        $sql = "select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc and ( Tensach like N'%".$str."%' or Tendanhmuc like N'%".$str."%' or Tacgia like N'%".$str."%' )";
        $result = mysqli_query($this->conn, $sql);
        if($result->num_rows>0)
        while($row = $result->fetch_assoc()){
            $dem++;
        }
        return $dem;
    }
    function Select_view(){
        $sql = "SELECT sum(Luotxem) as Luotxem, sum(Favorite) as Favorite , sum(Feedback) as Feedback FROM chitietsach";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    // feedback
    function Select_Feedback(){
        $sql = "SELECT tblaccount.ImgAvatar , tblaccount.MemberName , tblsach.Tensach , tbldanhgia.* FROM tblaccount , tblsach , tbldanhgia WHERE tblsach.idSach = tbldanhgia.idSach and tblaccount.idMember = tbldanhgia.idMember";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Find_feeback($str){
        $sql = "SELECT tblaccount.ImgAvatar , tblaccount.MemberName , tblsach.Tensach , tbldanhgia.* FROM tblaccount , tblsach , tbldanhgia WHERE tblsach.idSach = tbldanhgia.idSach and tblaccount.idMember = tbldanhgia.idMember and (Tensach like N'%".$str."%')";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Count_find_feedback($str){
        $dem=0;
        $sql = "SELECT tblaccount.ImgAvatar , tblaccount.MemberName , tblsach.Tensach , tbldanhgia.* FROM tblaccount , tblsach , tbldanhgia WHERE tblsach.idSach = tbldanhgia.idSach and tblaccount.idMember = tbldanhgia.idMember and (Tensach like N'%".$str."%')";
        $result = mysqli_query($this->conn, $sql);
        if($result->num_rows>0)
        while($row = $result->fetch_assoc()){
            $dem++;
        }
        return $dem;
    }
    function Delete_feedback($idDanhgia)
    {
        $sql = "delete from tbldanhgia where idDanhgia = '".$idDanhgia."'";
        
        if( mysqli_query($this->conn, $sql))
        {
            
            return true;
        }
            return false;
    }
     // Count comment 
     function Count_comment(){
        $sql = "SELECT COUNT(idDanhgia) as countComment FROM tbldanhgia;";
        $dem =0;
        $result = mysqli_query($this->conn, $sql);
        if($result->num_rows>0){
            
            while($row = $result->fetch_assoc()){
                $dem = $row['countComment'];
            }
        }
        return $dem;
    }
    //thống kê chi tiet sach
    function Select_Chitiet()
    {
        $sql = "SELECT tblsach.idSach , tblsach.NgayDang , tblsach.Tensach , chitietsach.Luotxem , chitietsach.Favorite , chitietsach.Feedback FROM tblsach , chitietsach WHERE tblsach.idSach = chitietsach.idSach";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    // thống kê ngày tháng năm
    function Select_date($sundays , $now)
    {
        $sql = "SELECT tblsach.idSach , tblsach.NgayDang , tblsach.Tensach , chitietsach.Luotxem , chitietsach.Favorite , chitietsach.Feedback FROM tblsach , chitietsach WHERE tblsach.idSach = chitietsach.idSach and tblsach.NgayDang BETWEEN '$sundays' AND '$now' ORDER BY tblsach.NgayDang ASC";
        $sql_query = mysqli_query($this->conn,$sql);
        return $sql_query;
    }
    //select chapters
    function Select_Chapters($idSach)
    {
        $sql = "SELECT * FROM tblchuong WHERE idSach = '".$idSach."'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Select_ChildChapters($idChuong)
    {
        $sql = "SELECT * FROM tblchuong WHERE idChuong = '".$idChuong."'";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //update chapters
    function Update_Chapters($idChuong,$Tenchuong , $noidung)
    {
        $sql = "UPDATE tblchuong SET TenChuong = N'".$Tenchuong."' , noidung = N'".$noidung."' where idChuong = '".$idChuong."'";
        $data = mysqli_query($this->conn, $sql);
        if($data)
        {
            return true;
        }
        return false;
    }
    //insert chapters
    function Insert_chapter($idSach , $Tenchuong , $noidung)
    {
        $sql = "INSERT into tblchuong (idSach, TenChuong , noidung) VALUES ('".$idSach."',N'".$Tenchuong."' ,N'".$noidung."')";
        $data = mysqli_query($this->conn, $sql);
        if($data)
        {
            return true;
        }
        return false;
    }
}