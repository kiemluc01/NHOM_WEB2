</div> <!-- page content -->
<div class="right_col" role="main">
    <div class="btn" style="width:80%">
        <form action="" method="post">
            <div id="filter" style="display:flex;justify-content:space-between!important ;">

                <div style="display: flex;">
                    <div class="filter-ft__ev">
                        <input type="text" placeholder="Nhập tên sách" name="namebook" id="namebook" />
                    </div>
                    <div class="filter-ft__ev">
                        <input type="submit" value="Tìm Kiếm" name="search" id="search">
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
                    <input type="submit" value="Thêm" name="add" id="add">
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
    $(document).ready(function() {
        $('#category').chage(function() {
            // var iddm = document.getElementById('category').value
            alert("có nghe")
            $.ajax({
                url: "Models/DataCategory.php",
                dataType: 'json',
                success: function(data) {

                    var str = '<table><tr> <th>STT</th><th>Tên sách</th><th>Tên tác giả</th><th>Năm xuất bản</th><th>Ngày Đăng</th><th>Hình ảnh sách</th> <th>Danh Mục</th><th>Thao tác</th></tr>'
                    var stt = 1
                    for (i = 0; i < data.length; i++) {
                        var book = data[i]
                        var dm = book['idDanhmuc']
                        if (iddm == dm) {
                            str = str + '<tr><td>' + stt + '</td><td>' + book['Tensach'] + '</td><td>' + book['Tacgia'] + '</td><td>' + book['NXB'] + '</td><td>' + book['NgayDang'] + '</td><td>' + book['imgSach'] + '</td><td>' + book['Tendanhmuc'] + '</td><td><input type="submit" value="Xóa" name="' + book['idSach'] + '" id="' + book['idSach'] + '"><input type="submit" value="sửa" name="' + book['idSach'] + '" id="' + book['idSach'] + '"></td></tr>'
                            stt++
                        }
                    }
                    str = str + '</table>'
                    document.getElementById('data_table').innerHTML = ""
                    document.getElementById('data_table').innerHTML = str

                }
            });
        })
    });
</script>