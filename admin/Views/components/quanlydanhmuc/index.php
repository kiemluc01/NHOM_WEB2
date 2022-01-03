</div> <!-- page content -->
<?php 
if(isset($_REQUEST['action']))
{

}
?>
    <div class="right_col" role="main">
        <div class="btn"style="width:100%">
        <form action="" method="post">
            <div id="filter" style="display:flex;justify-content:space-between!important ;">
                <div style="display: flex;">
                    <div class="filter-ft__ev">
                        <input type="text" placeholder="Nhập tên danh mục" name="namebook" id="namebook" />
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

                <input type="button" value="Thêm danh mục" name="add" id="add" class="btn btn-success" onclick="newDoc()">
                </div>
            </div>
        </form>
    </div>

           
        <div class="div_table" style="width = 100%">
            <table class = "table" style ="border:2px solid black">
                <tr>
                    <th>STT</th>
                    <th>Tên danh mục</th>
                    <th>Số sách trong danh mục</th>
                    <th>Thao tác</th>
                </tr>
                <?php 
                    $category = loadModel('Listcategories');
                    $result = $category->getAll();
                    $i =1;
                    if($result->num_rows>0)
                    while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['Tendanhmuc']; ?></td>
                    <td><?php echo $row['sosach']; ?></td>
                    <td>
                        <input type="submit"  class="btn btn-danger" value="Xóa" name="<?php echo $row['idDanhmuc']; ?>" id="<?php echo $row['idDanhmuc']; ?>">
                        <input type="submit" class="btn btn-warning" value="Sửa" name="<?php echo $row['idDanhmuc']; ?>" id="<?php echo $row['idDanhmuc'];?>">
                       
                    </td>
                </tr>
                    <?php }
                ?>
            </table>
        </div>
</div>
          <!-- /page content -->
          <script>
function newDoc() {
  window.location.assign("index.php?option=addcategory");
}
</script>         
          <!-- footer content -->
<!-- /footer content -->
