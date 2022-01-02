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
}