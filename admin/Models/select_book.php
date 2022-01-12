<?php 
$connect = mysqli_connect("localhost" , "root", "" , "docsach");
mysqli_query($connect,"SET NAMES 'utf8'");

if(isset($_REQUEST['idDanhmuc']))
{
$idDanhmuc =  $_REQUEST['idDanhmuc'];

$sql = "select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc and a.idDanhmuc = '".$idDanhmuc."'";
$result = mysqli_query($connect, $sql);

?>
 <table class = "table"  style = "border:1px solid black">
       <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Tên tác giả</th>
                <th>Năm xuất bản</th>
                <th>Ngày Đăng</th>
                <th>Hình ảnh sách</th>
                <th>Danh Mục</th>
                <th>Thao tác</th>
            </tr>
            <?php 
            $i = 1;
            if($result->num_rows>0)
                while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['Tensach']; ?></td>
                    <td><?php echo $row['Tacgia']; ?></td>
                    <td><?php echo $row['NXB']; ?></td>
                    <td><?php echo $row['NgayDang']; ?></td>
                    <td><img src="<?php echo $row['imgSach']; ?>" alt="" style="width:100px;height:auto;"></td>
                    <td><?php echo $row['Tendanhmuc']; ?></td>
                    <td>
                    <a href="<?php echo '?option=quanlysach&action=delete&idSach='.$row['idSach']; ?>" class="btn btn-danger">Xóa</a>
                    <a href="<?php echo '?option=quanlysach&sub_option=edit_book&idSach='.$row['idSach']; ?>" class="btn btn-warning">Sửa</a>
                    </td>
                </tr>
            <?php }
            ?>
        </table>
        <?php }?>