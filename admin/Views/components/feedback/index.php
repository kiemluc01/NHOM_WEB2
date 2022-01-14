<?php

if (isset($_REQUEST['action'])) {
    $Listbook = loadModel("Listbook");
    if ($_REQUEST['action'] == 'delete') {
        if ($Listbook->Delete_feedback($_REQUEST['idDanhgia'])) {
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
<div class="row" style="display:inline-block;">
</div>
<div class="row">
</div>
<div class="btn" style="width:100%">
    <form action="" method="post">
        <div id="filter" class="filter">

            <div class="filter-ft" style="display: flex;">
                <div class="filter-ft__ev">
                    <input type="text" placeholder="Nhập tên sách" name="namebook" id="namebook" />
                </div>
                <div class="filter-ft__ev">
                    <input type="submit" value="Tìm Kiếm" name="search" id="search" class="btn btn-dark">
                </div>
            </div>

        </div>
    </form>
</div>
<div class="data_table" id="data_table">
    <table class="table" style="border:1px solid black">
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
        $feedback = loadModel('Listbook');
        if (isset($_REQUEST['namebook'])) {
            $namebook = $_REQUEST['namebook'];
            $result = $feedback->Find_feeback($_REQUEST['namebook']);
        } else
            $result = $feedback->Select_Feedback();
        $i = 1;
        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
                if ($i > (int)($_REQUEST['page'] * 6) - 6) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['MemberName']; ?></td>
                    <td><img src="<?php echo $row['ImgAvatar']; ?>" alt="" style="width:100px;height:auto;"></td>
                    <td><?php echo $row['Tensach']; ?></td>
                    <td><?php echo $row['Noidung']; ?></td>
                    <td><?php echo $row['Thoigian']; ?></td>
                    <td>
                        <a href="<?php echo '?option=feedback&action=delete&idDanhgia=' . $row['idDanhgia']; ?>" class="btn btn-danger">Xóa</a>
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
            $soComment = $Listbook->Count_find_feedback($_REQUEST['namebook']);
        else
            $soComment = $Listbook->Count_comment();
        $sopage = ceil($soComment / (6.0));
        ?>
    </table>
</div>
<div class="page_number">
    <?php
    if ($_REQUEST['page'] > 1) { ?>
        <a href="index.php?option=feedback&page=1" <?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>>
            << </a>
                <a href="index.php?option=feedback&page=<?php echo $_REQUEST['page'] - 1; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>">
                    < </a>
                    <?php  }
                $d = 1;
                for ($i = $_REQUEST['page'] + 1; $i <= $sopage; $i++) {
                    $d++; ?>
                        <a href="index.php?option=feedback&page=<?php echo $i; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>"> <?php echo $i; ?></a>
                    <?php
                    if ($d == 3) break;
                }

                if ($_REQUEST['page'] != $sopage) { ?>
                        <a href="index.php?option=feedback&page=<?php echo $_REQUEST['page'] + 1; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>"> > </a>
                        <a href="index.php?option=feedback&page=<?php echo $sopage; ?><?php echo (isset($_REQUEST['namebook']) ? "&namebook=$namebook" : '') ?>"> >> </a>
                    <?php  } ?>
                </a>
        </a>
</div>



<!-- /page content -->

<!-- footer content -->
<!-- /footer content -->
<script>
    function newDoc() {
        window.location.assign("index.php?option=addbook");
    }
</script>