<?PHP
class Listcategories extends Database{
    function getAll(){
        $sql = "Select tbldanhmuc.*, c.sosach from tbldanhmuc,(SELECT idDanhmuc,COUNT(Tensach) as sosach FROM tblsach GROUP By idDanhmuc) as c where tbldanhmuc.idDanhmuc = c.idDanhmuc";
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
}