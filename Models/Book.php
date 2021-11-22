<?php
class Book extends Database
{
    //lấy ra toàn bộ sách
    function Book_all()
    {
        $sql = "select a.*,Sotrang,Luotxem,Feedback,Favorite 
            from tblsach as a,chitietsach as b 
            where  a.idSach = b.idSach 
            order by b.ngaydang desc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //tìm kiếm
    function find($string)
    {
        $sql = "select a.*,Sotrang,Luotxem,Feedback,Favorite 
            from tblsach as a,chitietsach as b,tbldanhmuc as c 
            where a.idSach like N'%" . $string . "%'and Tensach like N'%" . $string . "%'and a.idDanhmuc like N'%" . $string . "%' and Tendanhmuc like N'%" . $string . "%' and a.idSach = b.idSach and a.idDanhmuc = c.idDanhmuc 
            order by NgayDang desc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //lấy tất cả danh mục
    function get_category_all()
    {
        $sql = "select * from tbldanhmuc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //lấy danh mục theo id danhmuc
    function get_category($idDanhmuc)
    {
        $sql = "select * from tbldanhmuc where idDanhmuc = " . $idDanhmuc;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //lấy sách theo danh mục
    function Book_category($category)
    {
        $sql = "select a.*,Sotrang,Luotxem,Feedback,Favorite 
            from tblsach as a,chitietsach as b 
            where idDanhmuc = " . $category . " and a.idSach = b.idSach 
            order by NgayDang desc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    // lấy ra sách hiện tại 
    function get_bookcurrent($idBook)
    {
        $sql = "select a.*, Sotrang,tomtatND from tblsach as a, chitietsach as b where a.idSach = b.idSach and a.idSach = " . $idBook;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //lấy ra sách mới không có trong sach hiện tại
    function get_new_book($idsach_cur)
    {

        $sql = "select a.* from (select a.*, Sotrang,Luotxem,Feedback,Favorite,tomtatND from tblsach as a, chitietsach as b where a.idSach = b.idSach and a.idSach != " . $idsach_cur . " ) as a order by a.Favorite desc limit 5";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //lấy ra đánh giá về sách hiện tại
    function get_cmt($idBook)
    {
        $sql = "select a.*,b.* from tbldanhgia as a, tblaccount as b where a.idMember = b.idMember and idSach = " . $idBook;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    // function loadBookName($idSach)
    // {
    //     $row = array();
    //     $ten = null;
    //     $sql = "select Tensach from tblSach where idSach = " . $idSach;
    //     $result = mysqli_query($this->conn, $sql);
    //     while ($row = $result->fetch_assoc())
    //         $ten = $row['Tensach'];
    //     return $ten;
    // }
}
