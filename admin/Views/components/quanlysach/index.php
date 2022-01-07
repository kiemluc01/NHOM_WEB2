

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
            <div id="filter" class="filter">

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
                   <input type="button" value="Thêm" name="add" id="add" class="btn btn-success" onclick="newDoc()">
                </div>
            </div>
        </form>
    </div>

    <div class="data_table" id="data_table">
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
            $book = loadModel('Listbook');
            if (isset($_REQUEST['namebook']))
                $result = $book->Find_book($_REQUEST['namebook']);
            else
                $result = $book->getAll();
            $i = 1;
            if ($result->num_rows > 0)
                while ($row = $result->fetch_assoc()) {
                    if($i > (int)($_REQUEST['page']*6) - 6 ){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['Tensach']; ?></td>
                    <td><?php echo $row['Tacgia']; ?></td>
                    <td><?php echo $row['NXB']; ?></td>
                    <td><?php echo $row['NgayDang']; ?></td>
                    <td><img src="<?php echo $row['imgSach']; ?>" alt="" style="width:100px;height:auto;"></td>
                    <td><?php echo $row['Tendanhmuc']; ?></td>
                    <td>
                    <a href="<?php echo '?option=quanlysach&action=delete&idSach='.$row['idSach']; ?>" class="btn btn-danger">Xóa</a>
                    <a  href="<?php echo '?option=quanlysach&sub_option=edit_book&idSach='.$row['idSach']; ?>" class="btn btn-warning">Sửa thông tin sách</a>
                   
                    </td>
                </tr>
                <?php }
                if($i%6 ==0 && $i > ($_REQUEST['page']*6) - 6)
                    break;
                    $i++;
                ?>
       
        <?php }
              $Listbook = loadModel("Listbook");
              $soSach = $Listbook->Count_book();
            $sopage = ceil($soSach / (6.0));
            ?>
        </table>
    </div>
    <div class="page_number">
        <?php
        if($_REQUEST['page'] > 1){ ?>
            <a href="index.php?option=quanlysach&page=1"> << </a>
            <a href="index.php?option=quanlysach&page=<?php echo $_REQUEST['page']-1;?>"> < </a>
        <?php  }
        $d =1;
       for($i = $_REQUEST['page'] +1 ; $i<=$sopage; $i++){ $d++; ?>
           <a href="index.php?option=quanlysach&page=<?php echo $i;?>"> <?php echo $i; ?></a>
     <?php 
     if($d ==3) break;  }
        
        if($_REQUEST['page'] != $sopage ){ ?>
            <a href="index.php?option=quanlysach&page=<?php echo $_REQUEST['page']+1;?>"> > </a>
            <a href="index.php?option=quanlysach&page=<?php echo $sopage; ?>"> >> </a>
        <?php  } ?>
    </div>
</div>

<!-- /page content -->

<!-- footer content -->
<!-- /footer content -->
<script>
function newDoc() {
  window.location.assign("index.php?option=addbook")
}
$(document).ready(function() {
    $("#category").on('change',function(){
        var value = $(this).val();
        $.ajax({
            url:"Models/select_book.php",
            type:"POST",
            data:'idDanhmuc='+ value,
            beforeSend:function() {
                $(".data_table").html("<span>Working....</span>");
            },
            success:function(data){
                $(".data_table").html(data);    
            }
        })
    })
})
</script>