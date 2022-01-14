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
    function getAllBook()
    {
        $sql = "select * from tblsach";
        $result = mysqli_query($this->conn, $sql);
        mysqli_close($this->conn);
        return $result;
    }
    //tìm kiếm
    function find($string)
    {
        $sql = "select a.*,sochuong,Luotxem,Feedback,Favorite 
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
        $sql = "select a.*,sochuong,Luotxem,Feedback,Favorite 
            from tblsach as a,chitietsach as b 
            where idDanhmuc = " . $category . " and a.idSach = b.idSach 
            order by NgayDang desc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    // lấy ra sách hiện tại 
    function get_bookcurrent($idBook)
    {
        $sql = "select a.*, sochuong,TomtatND from tblsach as a, chitietsach as b where a.idSach = b.idSach and a.idSach = " . $idBook;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //lấy ra sách mới không có trong sach hiện tại
    function get_new_book($idsach_cur)
    {

        $sql = "select a.* from (select a.*, sochuong,Luotxem,Feedback,Favorite,TomtatND from tblsach as a, chitietsach as b where a.idSach = b.idSach and a.idSach != " . $idsach_cur . " ) as a order by a.Favorite desc limit 5";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function get_involve_book($str)
    {
        $sql = "select a.*,b.Tendanhmuc,Luotxem,Feedback,Favorite from tblsach as a, tbldanhmuc as b,chitietsach as c where a.idSach = c.idSach and a.idDanhmuc = b.idDanhmuc and a.idSach NOT IN(select a.idSach from tblsach as a, tbldanhmuc as b,chitietsach as c where a.idSach = c.idSach and a.idDanhmuc = b.idDanhmuc and ( Tensach like N'%" . $str . "%' or Tendanhmuc like N'%" . $str . "%' or Tacgia like N'%" . $str . "%' ))limit 5";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    //lấy ra đánh giá về sách hiện tại
    function get_cmt($idBook)
    {
        $sql = "select a.*,b.* from tbldanhgia as a, tblaccount as b where a.idMember = b.idMember and idSach = " . $idBook . " order by Thoigian desc";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function check_f()
    {
        $member = loadModel('Member');
        $sql = "select * from tblfavorite where idSach =" . $_REQUEST['idSach'] . " and idMember=" . $member->getID();
        $result = mysqli_query($this->conn, $sql);
        if (
            $result->num_rows > 0
        )
        return true;
        else return false;
    }
    function loadBookName($idSach)
    {
        $row = array();
        $ten = null;
        $sql = "select Tensach from tblSach where idSach = " . $idSach;
        $result = mysqli_query($this->conn, $sql);
        while ($row = $result->fetch_assoc())
            $ten = $row['Tensach'];
        return $ten;
    }
    function get_favour_by_book($idBook)
    {
        $sql = "select * from tblfavorite where idsach = " . $idBook;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function get_favour_by_user($idUser)
    {
        $sql = "select * from tblfavorite where idMember = " . $idUser;
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function chapterContent($idSach, $tenchuong)
    {
        $sql = "select * from tblchuong where idSach =" . $idSach . " and TenChuong= N'" . $tenchuong . "'";
        $result = mysqli_query($this->conn, $sql);
        $content = "";
        $pages = array();
        $row = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $content = $row['noidung'];
            }
        }
        return $content;
    }
    function TachPage($idSach, $tenchuong)
    {
        $sql = "select * from tblchuong where idSach =" . $idSach . " and TenChuong= N'" . $tenchuong . "'";
        $text = "chưa cha ơi";
        $content = "";
        $kitutrang = 0;
        $sokitudaduyet = 0;
        $st = $_REQUEST['kitu'];
        $row = array();
        $result = mysqli_query($this->conn, $sql);
        if (
            $result->num_rows > 0
        ) {
            while ($row = $result->fetch_assoc()) {
                $content = $row['noidung'];
            }

            while (
                $kitutrang <= 1000 && $sokitudaduyet <= strlen($content)
            ) {

                if (substr($content, $st + $sokitudaduyet, 1) == " ") {
                    $kitutrang++;
                }
                $sokitudaduyet++;
            }
            $text = substr($content, $st, $sokitudaduyet);
        }

        return $text;
    }
    function divideContentToLine($str)
    {
        $lines = array(); // [line]
        // $words_count = str_word_count($str);
        $paragraphs = array();
        $paragraphs = explode("\n", $str); // []
        $line_count = 0;
        foreach ($paragraphs as $para_str) {
            if (strlen($para_str) > 4) {
                $para_str = trim($para_str);
            }
            $or = ord($para_str);
            if ($or == 32) {
                $lines[$line_count] = "\n";
            } else {
                $words_in_each_paragraph = array();
                $words_in_each_paragraph = explode(" ", $para_str);
                $lines[$line_count] = "";
                foreach ($words_in_each_paragraph as $word) {
                    if (strlen($lines[$line_count]) < 60) {
                        $lines[$line_count] = $lines[$line_count] . $word . " ";
                    } else {
                        $line_count++;
                        $lines[$line_count] = $word . " ";
                    }
                }
            }
            $line_count++;
        }
        return $lines;
    }
    function loadkitu(
        $i,
        $idSach,
        $tenchuong
    ) {
        $sql = "select * from tblchuong where idSach =" . $idSach . " and TenChuong= N'" . $tenchuong . "'";
        $content = "";
        $kitutrang = 0;
        $sokitudaduyet = 0;
        $row = array();
        $result = mysqli_query($this->conn, $sql);
        if (
            $result->num_rows > 0
        ) {
            while ($row = $result->fetch_assoc()) {
                $content = $row['noidung'];
            }

            while (
                $kitutrang <= ($i - 1) * 1000 && $sokitudaduyet <= strlen($content)
            ) {

                if (substr($content, $sokitudaduyet, 1) == " ") {
                    $kitutrang++;
                }
                $sokitudaduyet++;
            }
        }
        return $sokitudaduyet;
    }
    function loadSotrang($idSach, $tenchuong)
    {
        $sql = "select * from tblchuong where idSach =" . $idSach . " and TenChuong= N'" . $tenchuong . "'";
        $content = "";
        $kitutrang = 0;
        $sokitudaduyet = 0;
        $row = array();
        $result = mysqli_query($this->conn, $sql);
        if (
            $result->num_rows > 0
        ) {
            while ($row = $result->fetch_assoc()) {
                $content = $row['noidung'];
            }

            while ($sokitudaduyet <= strlen($content)) {

                if (substr($content, $sokitudaduyet, 1) == " ") {
                    $kitutrang++;
                }
                $sokitudaduyet++;
            }
        }
        return ceil($kitutrang / 1000);
    }
    function convert_text($text)
    {
        $str = '';
        $kitu = 0;
        $vt = 0;
        while ($vt + $kitu <= strlen($text)) {
            $kitu++;
            if (substr($text, $vt + $kitu, 1) == '\n') {
                $str .= substr($text, $vt, $kitu);
                $vt += $kitu;
                $kitu = 0;
            }
            if (
                $kitu >= 200 && substr($text, $vt + $kitu, 1) == ' '
            ) {
                $str .= substr($text, $vt, $kitu) . '<br>';
                $vt += $kitu;
                $kitu = 0;
            }
        }
        return $str;
    }
    function cmt($noidung, $idSach)
    {
        $member = loadModel('Member');
        $time = date('y-m-d');
        $sql = "insert into tbldanhgia values(" . $member->getID() . ", " . $idSach . ",null,N'" . $noidung . "','" . $time . "');";
        mysqli_query($this->conn, $sql);
    }
    function getChapter($idBook)
    {
        $sql = "select * from tblchuong where idSach = " . $idBook;
        return mysqli_query($this->conn, $sql);
    }
    function FirstChapter($idBook)
    {
        $sql = "select * from tblchuong where idSach = " . $idBook;
        $ten = '';
        $result = mysqli_query($this->conn, $sql);
        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
                $ten = $row['TenChuong'];
                break;
            }
        return $ten;
    }
    function Find_book($str)
    {
        $sql = "select a.*,b.Tendanhmuc,Luotxem,Feedback,Favorite from tblsach as a, tbldanhmuc as b,chitietsach as c where a.idSach = c.idSach and a.idDanhmuc = b.idDanhmuc and ( Tensach like N'%" . $str . "%' or Tendanhmuc like N'%" . $str . "%' or Tacgia like N'%" . $str . "%' )";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    function Views()
    {
        $sql = "update chitietsach set Luotxem = Luotxem +1";
        mysqli_query($this->conn, $sql);
    }
    function getRate()
    {
        $sql = "select idSach,avg(sosao) as sosao from rate where idSach =" . $_REQUEST['idSach'] . " group by idSach";
        $rate = 0;
        $result = mysqli_query($this->conn, $sql);
        if (
            $result != false && $result->num_rows > 0
        ) {
            while ($row = $result->fetch_assoc())
            $rate = $row['sosao'];
        }
        return round($rate, 1);
    }
    function checkRate()
    {
        $member = loadModel('Member');
        $sql = "select * from rate where idSach =" . $_REQUEST['idSach'] . " and idMember = " . $member->getID() . " group by idSach";
        $rate = 0;
        $result = mysqli_query($this->conn, $sql);
        if (
            $result != false && $result->num_rows > 0
        ) {
            while ($row = $result->fetch_assoc())
            $rate = $row['sosao'];
        }
        return $rate;
    }
    function getFavouriteBook()
    {
        $member = loadModel(('Member'));
        $sql = "select a.idSach,a.idMember,b.Tensach,imgSach from tblfavorite as a,tblsach as b where a.idSach = b.idSach and idMember = " . $member->getID();
        return mysqli_query($this->conn, $sql);
    }
}
