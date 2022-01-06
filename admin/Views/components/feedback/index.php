

</div> <!-- page content -->
<?php 

if(isset($_REQUEST['action']))
{
    $Listbook = loadModel("Listbook");
    if($_REQUEST['action'] == 'delete'){
        if($Listbook->Delete_feedback($_REQUEST['idDanhgia'])){
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
                <th>Tên người dùng</th>
                <th>Hình ảnh người dùng</th>
                <th>Tên sách</th>
                <th>Nội dung bình luận</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
            </tr>
            <?php
            $book = loadModel('Listbook');
            if (isset($_REQUEST['namebook']))
                $result = $book->Find_feeback($_REQUEST['namebook']);
            else
                $result = $book->Select_Feedback();
            $i = 1;
            if ($result->num_rows > 0)
                while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['MemberName']; ?></td>
                    <td><img src="<?php echo $row['ImgAvatar']; ?>" alt="" style="width:100px;height:auto;"></td>
                    <td><?php echo $row['Tensach']; ?></td>
                    <td><?php echo $row['Noidung']; ?></td>
                    <td><?php echo $row['Thoigian']; ?></td>
                    <td>
                    <a href="<?php echo '?option=feedback&action=delete&idDanhgia='.$row['idDanhgia']; ?>" class="btn btn-danger">Xóa</a>
                    
        
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