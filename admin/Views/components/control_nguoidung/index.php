

</div> <!-- page content -->
<?php 

if(isset($_REQUEST['action']))
{
    $Listbook = loadModel("Listbook");
    if($_REQUEST['action'] == 'delete'){
        if($Listbook->Delete_book($_REQUEST['idSach'])){
            echo '<script>alert("Xóa Thành Công")</script>';
        }else
            echo '<script>alert("Xóa Không Thành Công")</script>';
    }
    
}
?>
    <div class="right_col" role="main">
        <div class="row" style="display:inline-block;">
        </div>
        <div class="row">
        </div>
        <div class="btn" style="width:100%">
            <form action="" method="post">
            <div id="filter" class="filter" style=" ;">

                <div class= "filter-ft" style="display: flex;">
                    <div class="filter-ft__ev">
                        <input type="text" placeholder="Nhập tên sách" name="namebook" id="namebook" />
                    </div>
                    <div class="filter-ft__ev">
                        <input type="submit" value="Tìm Kiếm" name="search" id="search" class = "btn btn-dark">
                    </div>
                </div>
                <div class="filter-ft__ev">
                    <label for="">Tên danh mục :</label>
                    <select name="category" id="category">
                        <option value="category">Tìm kiếm theo danh mục</option>
                        <?php
                        $cat = loadModel('Listcategories');
                        $result = $cat->getAll();
                        if ($result->num_rows > 0)
                            while ($row = $result->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idDanhmuc'] ?>"><?php echo $row['Tendanhmuc'] ?></option>
                        <?php }
                        ?>
                    </select>
                </div>
              
            </div>
        </form>
    </div>

    <div class="tb table" id="data_table">
        <table class = "table"  style = "border:1px solid black">
            <tr>
                <th>STT</th>
                <th>Tên đăng nhập</th>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Ành đại diện</th>
                <th>Thao tác</th>
            </tr>
            <?php
            $book = loadModel('Account');
            if (isset($_REQUEST['namebook']))
                $result = $book->Find_book($_REQUEST['namebook']);
            else
                $result = $book->getAll();
            $i = 1;
            if ($result->num_rows > 0)
                while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['MemberName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['Gioitinh']; ?></td>
                    <td><?php echo $row['Ngaysinh']; ?></td>
                    <?php if($row['ImgAvatar'] == "Chưa thiết lập" || $row['ImgAvatar'] == null ){?>
                    <td><h5>Chưa có hình ảnh</h5></td>
                    <?php }else{?>
                    <td><img src="<?php echo $row['ImgAvatar']; ?>" alt="" style="width:100px;height:auto;"></td>
                    <?php }?>
                    <td>
                    <a href="<?php echo '?option=control_nguoidung&action=delete&idMember='.$row['idMember']; ?>" class="btn btn-danger">Xóa</a>
                    <a href="<?php echo '?option=control_nguoidung&sub_option=edit_book&idMember='.$row['idMember']; ?>" class="btn btn-warning">Sửa</a>
        
                    </td>
                </tr>
            <?php }
            ?>
        </table>
    </div>
</div>

<!-- /page content -->

<!-- footer content -->
<!-- /footer content -->
<script>
function newDoc() {
  window.location.assign("index.php?option=addbook");
}
</script>