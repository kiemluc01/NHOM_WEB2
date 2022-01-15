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
?>
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Quản lý thông tin người dùng</h3>
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
                    <h2>Three Owls Book <small>Quản lý thông tin người dùng</small></h2>
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
                            <div class="card-box table-responsive">
                                <div class="data_table" id="data_table">
                                    <table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên đăng nhập</th>
                                                <th>Tên người dùng</th>
                                                <th>Email</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                                <th>Ành đại diện</th>
                                                <th>Quyền</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                    <?php if ($row['ImgAvatar'] == "Chưa thiết lập" || $row['ImgAvatar'] == null) { ?>
                                                        <td>
                                                            <h5>Chưa có hình ảnh</h5>
                                                        </td>
                                                    <?php } else { ?>
                                                        <td><img src="<?php echo $row['ImgAvatar']; ?>" alt="" style="width:100px;height:auto;"></td>
                                                    <?php } ?>
                                                    <td><?php echo $row['tenquyen']; ?></td>
                                                    <td>
                                                        <a href="<?php echo '?option=control_nguoidung&action=delete&idMember=' . $row['idMember']; ?>" class="btn btn-danger">Xóa</a>
                                                        <a href="<?php echo '?option=control_nguoidung&sub_option=edit_user&idMember=' . $row['idMember']; ?>" class="btn btn-warning">Sửa</a>

                                                    </td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
        window.location.assign("index.php?option=addbook");
    }
</script>