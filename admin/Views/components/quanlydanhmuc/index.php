<?php
if (isset($_REQUEST['btn_add'])) {
    if (isset($_POST['Tendanhmuc'])) {
        $Tendanhmuc = $_POST['Tendanhmuc'];
        $Listcategories = loadModel('Listcategories');
        $insert = $Listcategories->Insert_category($Tendanhmuc);
        if ($insert > 0) {
            echo '<script>alert("Thêm thành công");
          location.assign("index.php?option=quanlydanhmuc");</script>';
        } else {
            echo '<script>alert("Thêm không thành công");</script>';
        }
    }
}
?>
<?php
if (isset($_REQUEST['action'])) {
}
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Quản lý danh mục sách</h3>
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
                    <h2>Three Owls Book <small>Quản lý danh mục sách</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="" class="d-flex justify-content-between" method="post">
                                <div class="form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Nhập tên sách" name="namebook" id="namebook" />
                                        <span class="input-group-btn">
                                            <!-- <input type="submit" value="Tìm Kiếm" name="search" id="search" class="btn btn-dark"> -->
                                            <button name="search" id="search" class="btn btn-dark" type="submit">Tìm kiếm</button>
                                        </span>
                                    </div>
                                </div>
                                <!-- <div class="">
                                    <label for="">Tên danh mục :</label>
                                    <select class="form-control" name="category" id="category">
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
                                </div> -->
                                <div class="">
                                    <input type="button" value="Thêm danh mục" name="add" id="add" class="btn btn-success" onclick="newDoc()">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <div class="data_table" id="data_table">
                                    <table class="table table-striped table-bordered" style="width:100%">
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên danh mục</th>
                                            <th>Số sách trong danh mục</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        <?php
                                        $category = loadModel('Listcategories');
                                        $result = $category->getAll();

                                        $i = 1;
                                        if ($result->num_rows > 0)
                                            while ($row = $result->fetch_assoc()) {
                                                $soSach = $category->count_category($row['idDanhmuc']); ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row['Tendanhmuc']; ?></td>
                                                <td><?php echo $soSach; ?></td>
                                                <td>
                                                    <input type="submit" class="btn btn-danger" value="Xóa" name="<?php echo $row['idDanhmuc']; ?>" id="<?php echo $row['idDanhmuc']; ?>">
                                                    <input type="submit" class="btn btn-warning" value="Sửa" name="<?php echo $row['idDanhmuc']; ?>" id="<?php echo $row['idDanhmuc']; ?>">

                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dialog_DM" style="display: none;  border-radius:10px/10px;position:absolute ; top: 15%;left: 30%; width:  50%; height: 200px; background-color:rgba(0, 0, 0, 0.5);" id="add_cat">
                        <form action="" method="post" style="width:99% ; margin-top:30px">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nhập tên danh mục <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="Tendanhmuc" name="Tendanhmuc" required="required" class="form-control">
                                </div>
                            </div>
                            <center>
                                <input type="submit" name="btn_add" class="btn btn-success" value="Thêm">
                            </center>
                        </form>
                        <input type="button" src="" alt="X" id="close" onclick="close()" style="width:40px;height:40px; border-radius:50%/50%; background-color:red;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script>
    function newDoc() {
        document.getElementById('add_cat').style.display = "flex";
    }

    function close() {
        document.getElementById('add_cat').style.display = "none";
    }
</script>
<!-- footer content -->
<!-- /footer content -->