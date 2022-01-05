

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
    <div class="right_col">
        <div class="btn" style="width:100%">
            <form action="" method="post">
            <div id="filter" class="filter" style="display: flex;">
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
                <div class="filter-ft__ev">
                    <input type="button" value="Thêm Banner" name="add" id="add" class="btn btn-success" onclick="newDoc()">
                </div>
            </div>
        </form>
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
                    <td><img src="<?php echo $row['img']; ?>" alt="" style="width:auto;height:200px;"></td>
                    <td>
                    <a href="<?php echo '?option=banner&action=delete&idbanner='.$row['idbanner']; ?>" class="btn btn-danger">Xóa</a>
                    <a href="<?php echo '?option=banner&sub_option=edit_book&idbanner='.$row['idbanner']; ?>" class="btn btn-warning">Sửa</a>
        
                    </td>
                </tr>
            <?php }
            ?>
        </table>
        <!-- modal -->
        <div class="modal">
            <div class="modal__overlay"></div>
            <div class="modal__body">
                <div class="modal_inner">
                <!-- authen form -->
                    <div class="add_banner" id = "add_banner">
                        <div class="add_banner__header">
                            <h3 class="add_banner__heading">Thêm banner</h3>
                        </div>
                        <div class="add_banner__foem">
                            <div class="add_banner__group">
                                <input type="file" class="add_banner__image" placeholder="Chọn hình ảnh">
                            </div>
                        </div>
                    </div>
         <!-- authen form -->
                </div>
            </div>
        </div>
              <!-- modal -->  
    </div>
</div>

<!-- /page content -->

<!-- footer content -->
<!-- /footer content -->
<script>
function newDoc() {
    document.getElementById('add_banner').style.display = "flex";
}
</script>