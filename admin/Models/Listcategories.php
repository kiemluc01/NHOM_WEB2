<?PHP
class Listcategories extends Database{
    function getAll(){
        $sql = "Select tbldanhmuc.*, c.sosach from tbldanhmuc,(SELECT idDanhmuc,COUNT(Tensach) as sosach FROM tblsach GROUP By idDanhmuc) as c where tbldanhmuc.idDanhmuc = c.idDanhmuc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}