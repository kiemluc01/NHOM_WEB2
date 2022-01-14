<?php
if (isset($_REQUEST['action'])) {
    $Listbook = loadModel("Listbook");
    if ($_REQUEST['action'] == 'delete') {
        if ($Listbook->Delete_book($_REQUEST['idSach'])) {
            echo '<script>alert("Xóa Thành Công")</script>';
        } else
            echo '<script>alert("Xóa Không Thành Công")</script>';
    }
}
$namebook = "";
if (isset($_REQUEST['namebook'])) {
    $namebook = $_REQUEST['namebook'];
}
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Quản lý sách <small>Quản lý thông tin tất cả các đầu sách</small></h3>
        </div>
        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Three Owls Book <small>Quản lý sách</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="" method="post" class="d-flex justify-content-between">
                                <!-- <div id="filter" class="filter"> -->
                                <div class=" form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Nhập tên sách" name="namebook" id="namebook" />
                                        <span class="input-group-btn">
                                            <!-- <input type="submit" value="Tìm Kiếm" name="search" id="search" class="btn btn-dark"> -->
                                            <button name="search" id="search" class="btn btn-dark" type="submit">Tìm kiếm</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="">
                                    <!-- <label for="">Tên danh mục :</label> -->
                                    <select name="category" class="form-control" id="category">
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
                                <div class="">
                                    <input type="button" value="Thêm sách" name="add" id="add" class="btn btn-success" onclick="newDoc()">
                                </div>
                                <!-- </div> -->
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <div class="data_table" id="data_table">
                                    <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
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
                                        </thead>
                                        <tbody>
                                            <?php
                                            $book = loadModel('Listbook');
                                            if (isset($_REQUEST['namebook'])) {
                                                $namebook = $_REQUEST['namebook'];
                                                $result = $book->Find_book($_REQUEST['namebook']);
                                            } else
                                                $result = $book->getAll();
                                            $i = 1;
                                            if ($result->num_rows > 0)
                                                while ($row = $result->fetch_assoc()) {
                                                    if ($i > (int)($_REQUEST['page'] * 6) - 6) { ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row['Tensach']; ?></td>
                                                        <td><?php echo $row['Tacgia']; ?></td>
                                                        <td><?php echo $row['NXB']; ?></td>
                                                        <td><?php echo $row['NgayDang']; ?></td>
                                                        <td><img src="<?php echo $row['imgSach']; ?>" alt="" style="width:100px;height:auto;"></td>
                                                        <td><?php echo $row['Tendanhmuc']; ?></td>
                                                        <td>
                                                            <a href="<?php echo '?option=quanlysach&action=delete&idSach=' . $row['idSach']; ?>" class="btn btn-danger">Xóa</a>
                                                            <a href="<?php echo '?option=quanlysach&sub_option=edit_book&idSach=' . $row['idSach']; ?>" class="btn btn-primary">Sửa thông tin sách</a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                    if ($i % 6 == 0 && $i > ($_REQUEST['page'] * 6) - 6)
                                                        break;
                                                    $i++;
                                                ?>

                                            <?php }
                                            $Listbook = loadModel("Listbook");
                                            if (isset($_REQUEST['namebook']))
                                                $soSach = $Listbook->Count_find_book($_REQUEST['namebook']);
                                            else
                                                $soSach = $Listbook->Count_book();
                                            $sopage = ceil($soSach / (6.0));
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="pagination">
                                <?php
                                if ($_REQUEST['page'] > 1) {  ?>
                                    <li class="page-item"><a class="page-link" href="index.php?option=quanlysach&page=1" <?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>>
                                        << </a></a></li>
                                        <li class="page-item"><a class="page-link" href="index.php?option=quanlysach&page=<?php echo $_REQUEST['page'] - 1; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : ' ') ?>">
                                                < </a></a></li>
                                                <?php  }
                                            $d = 1;
                                            for ($i = $_REQUEST['page'] + 1; $i <= $sopage; $i++) {
                                                $d++; ?>
                                                    <li class="page-item"><a class="page-link" href="index.php?option=quanlysach&page=<?php echo $i; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>"><?php echo $i; ?></a></li>
                                                <?php
                                                if ($d == 3) break;
                                            }

                                            if ($_REQUEST['page'] != $sopage) { ?>
                                                    <li class="page-item"><a class="page-link" href="index.php?option=quanlysach&page=<?php echo $_REQUEST['page'] + 1; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>"> > </a></li>
                                                    <li class="page-item"><a class="page-link" href="index.php?option=quanlysach&page=<?php echo $sopage; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>"> >> </a></li>
                                                <?php  } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        $("#category").on('change', function() {
            var value = $(this).val();
            $.ajax({
                url: "Models/select_book.php",
                type: "POST",
                data: 'idDanhmuc=' + value,
                beforeSend: function() {
                    $(".data_table").html("<span>Working....</span>");
                },
                success: function(data) {
                    $(".data_table").html(data);
                }
            })
        })
    })
</script>