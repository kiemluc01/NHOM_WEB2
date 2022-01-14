<?PHP
class Listcategories extends Database{
    function getAll(){
        $sql = "select *from tbldanhmuc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Insert_category($name)
    {
        $sql = "insert into tbldanhmuc(Tendanhmuc) values(N'".$name."')";
        $dataInsert = mysqli_query($this->conn, $sql);
        $checksql = "select * from tbldanhmuc where Tendanhmuc = '".$name."'";
        $dataCheck = mysqli_query($this->conn, $checksql);
        if($dataCheck-> num_rows > 0)
        {
            echo '<script>alert("Danh mục đã tồn tại")</script>';
        }
        else {
            if($dataInsert)
            {
                return true;
            }
            return false;
        }
    }
    function count_category($idDM){
        $sql = "SELECT idDanhmuc,idSach FROM tblsach where idDanhmuc = ".$idDM;
        $result = mysqli_query($this->conn, $sql);
        return $result->num_rows;
    }
}