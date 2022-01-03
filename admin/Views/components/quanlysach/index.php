

</div> <!-- page content -->
<<<<<<< HEAD
<div class="right_col" role="main">
    <div class="btn" style="width:80%">
        <form action="" method="post">
            <div class = "filter "id="filter" style="display:flex;justify-content:space-between!important ;">
                <div style="display: flex;"  class = "filter-ft">
=======
    <div class="right_col" role="main">
        <div class="row" style="display:inline-block;">
            
        </div>
        <div class="row">
    
        </div>
        <div class="btn" style="width:100%">
            <form action="" method="post">
            <div id="filter" style="display:flex;justify-content:space-between!important ;">

                <div style="display: flex;">
>>>>>>> 2d7ec9e706a66abd6bf3131adee6ad9c23257712
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

    <div class="tb table" id="data_table">
        <table>
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
                        <input type="submit" value="Xóa" name="<?php echo $row['idSach']; ?>" id="<?php echo $row['idSach']; ?>">
                        <input type="submit" value="Sửa" name="<?php echo $row['idSach']; ?>" id="<?php echo $row['idSach']; ?>">
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