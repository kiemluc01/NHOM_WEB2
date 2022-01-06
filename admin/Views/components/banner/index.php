

</div> <!-- page content -->
<?php
$banner = loadModel('banner');
if(isset($_REQUEST['btn_add'])){
$target_dir = "Public/images/banner/";
$target_file = $target_dir.basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
$insert = $banner->Insert_banner($target_file);
if($insert>0)
{
echo '<script>alert("Thêm Thành Công");
location.assign("index.php?option=banner");</script>';
}else{
echo '<script>alert("Thêm Không Thành Công");</script>';
}

}
?>
<?php
if(isset($_REQUEST['action']))
{
    if($_REQUEST['action'] == 'delete'){
        if($banner->Delete_banner($_REQUEST['idbanner'])){
            echo '<script>alert("Xóa Thành Công")</script>';
        }else
        {
            echo '<script>alert("Xóa Không Thành Công")</script>';
        }
    }  
}
?>
    <div class="right_col">
        <form action="#" method = "post">
            <div class="btn" >
                <div id="filter" class="filter">
                    <div class= "filter-ft" >
                        <div class="filter-ft__ev">
                            <input type="text" placeholder="Nhập tên sách" name="namebook" id="namebook" />
                        </div>
                        <div class="filter-ft__ev">
                            <input type="submit" value="Tìm Kiếm" name="search" id="search" class = "btn btn-dark">
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
                        <div class="filter-ft__ev">
                            <input type="button" value="Thêm Banner" name="add" id="add" class="btn btn-success" onclick="newDoc()">
                        </div>
                    </div>
                </div>
                <div class="tb table" id="data_table">
                    <table class = "table"  style = "border:1px solid black">
                        <tr>
                            <th>STT</th>
                            <th>Hình ảnh</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                        $book = loadModel('banner');
                        if (isset($_REQUEST['namebook']))
                            $result = $book->Find_book($_REQUEST['namebook']);
                        else
                            $result = $book->getAll();
                        $i = 1;
                        if ($result->num_rows > 0)
                            while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><img src="<?php echo $row['img']; ?>" alt="" style="width:300px;height:200px;"></td>
                                <td>
                                <a href="<?php echo '?option=banner&action=delete&idbanner='.$row['idbanner']; ?>" class="btn btn-danger">Xóa</a>
                                <a href="<?php echo '?option=banner&sub_option=edit_book&idbanner='.$row['idbanner']; ?>" class="btn btn-warning">Sửa</a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </table>
                </div>   
            </div>
        </form>
        <form id ="form_modal" method="post" enctype="multipart/form-data">
            <!-- modal -->  
            <div id = "modal_inner" class="modal_inner">
                <div class="modal__overlay"></div>
                    <div class="modal__body">
                        <div class="modal__main">
                            <!-- authen form -->
                                <div class="add_banner" id = "add_banner">
                                    <div class="add_banner__header">
                                        <h3 class="add_banner__heading">Thêm banner</h3>
                                    </div>
                                    <div class="add_banner__form">
                                        <div class="add_banner__group">
                                        <input type="file" id="file" name="file" class="date-picker form-control" required>
                                        </div>
                                        <img src="" height = "150px" width="100px" id = "img_new" class = "img-thumbnail"/>
                                    </div>
                                </div>
                                <input type="submit" name = "btn_add" class="btn btn-success submit" value = "Thêm">
                    <!-- authen form -->
                        </div>
                    </div>
            </div>
        <!-- modal -->
        </form>
    </div>
</div>

<!-- /page content -->
<!-- footer content -->
<!-- /footer content -->
<script>
function newDoc() {
    document.getElementById('modal_inner').style.display = "flex";
}
</script>