<?php
$connect = mysqli_connect("localhost", "root", "", "docsach");
mysqli_query($connect, "SET NAMES 'utf8'");
if (isset($_REQUEST['noidung']) && isset($_REQUEST['user']) && isset($_REQUEST['idSach'])) {
    $noidung = $_REQUEST['noidung'];
    $user = $_REQUEST['user'];
    $idsach = $_REQUEST['idSach'];
    $sql = "select * from tblaccount where username ='" . $user . "'";
    $result = mysqli_query($connect, $sql);
    $iduser = "";
    while ($row = $result->fetch_assoc()) {
        $iduser = $row['idMember'];
    }

    $time = date('Y/m/d/H/i/s');
    $sql = "insert into tbldanhgia values(" . $iduser . "," . $idsach . ",null,N'" . $noidung . "','" . $time . "');";
    mysqli_query($connect, $sql);
    $sql = "select a.*,b.* from tbldanhgia as a, tblaccount as b where a.idMember = b.idMember and idSach = " . $idsach . " order by Thoigian desc";
    $result = mysqli_query($connect, $sql);
    $sql = "select a.*,b.* from tbldanhgia as a, tblaccount as b where a.idMember = b.idMember and idSach = " . $idsach . " order by Thoigian desc";
    $result = mysqli_query($connect, $sql);
?>
    <h4 class="[  custom-book-info-heading  custom-book-info-heading--4  ]">Cảm nhận bạn đọc</h4>
    <div class="custom-max-box mt-3 scroll-height-50">
        <?php
        if (true) {
            while ($cmt_row = $result->fetch_assoc()) {
                $dateCmt = strtotime($cmt_row['Thoigian']);
                $parts = getdate($dateCmt); ?>
                <div class="card mb-3 text-justify position-relative">
                    <div class="card-body d-flex">
                        <div class="me-3">
                            <img src="<?php echo $cmt_row['ImgAvatar'] ?>" alt="Avt" class="rounded-3" width="50" height="50">
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <span class="float-end"><?php echo $parts['mday'] . "-" . $parts['mon'] . "-" . $parts['year']; ?></span>
                                <h4><?php
                                    echo $user; ?></h4>
                            </div>
                            <p class="mt-3"><?php echo $cmt_row['Noidung'] ?></p>
                        </div>
                    </div>
                    <?php
                    if ($cmt_row['username'] == $user) { ?>
                        <div class="position-absolute comment-trash">
                            <a href="" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#deleteCmtAlert"><i class="fas fa-trash"></i></a>
                            <!-- <button class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#deleteCmtAlert"><i class="fas fa-trash"></i></button> -->
                        </div><?php } ?>
                </div>
        <?php }
        } ?>
    </div>
<?php } ?>

<?php
if (isset($_REQUEST['id']) && isset($_REQUEST['user']) && isset($_REQUEST['idsach'])) {
    $id = $_REQUEST['id'];
    $user = $_REQUEST['user'];
    $idsach = $_REQUEST['idsach'];
    $sql = "delete from tbldanhgia where iddanhgia =" . $_REQUEST['id'];
    if (mysqli_query($connect, $sql)) {
        $sql1 = "select * from tblaccount where username ='" . $user . "'";
        $result = mysqli_query($connect, $sql1);
        $iduser = "";
        while ($row = $result->fetch_assoc()) {
            $iduser = $row['idMember'];
        }
        $sql = "select a.*,b.* from tbldanhgia as a, tblaccount as b where a.idMember = b.idMember and idSach = " . $idsach . " order by Thoigian desc";
        $result = mysqli_query($connect, $sql);
?>
        <h4 class="[  custom-book-info-heading  custom-book-info-heading--4  ]">Cảm nhận bạn đọc</h4>
        <div class="custom-max-box mt-3 scroll-height-50">
            <?php
            if (true) {
                while ($cmt_row = $result->fetch_assoc()) {
                    $dateCmt = strtotime($cmt_row['Thoigian']);
                    $parts = getdate($dateCmt); ?>
                    <div class="card mb-3 text-justify position-relative">
                        <div class="card-body d-flex">
                            <div class="me-3">
                                <img src="<?php echo $cmt_row['ImgAvatar'] ?>" alt="Avt" class="rounded-3" width="50" height="50">
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    <span class="float-end"><?php echo $parts['mday'] . "-" . $parts['mon'] . "-" . $parts['year']; ?></span>
                                    <h4><?php
                                        echo $user; ?></h4>
                                </div>
                                <p class="mt-3"><?php echo $cmt_row['Noidung'] ?></p>
                            </div>
                        </div>
                        <?php
                        if ($cmt_row['username'] == $user) { ?>
                            <div class="position-absolute comment-trash">
                                <a href="" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#deleteCmtAlert"><i class="fas fa-trash"></i></a>
                                <!-- <button class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#deleteCmtAlert"><i class="fas fa-trash"></i></button> -->
                            </div><?php } ?>
                    </div>
            <?php }
            } ?>
        </div>
<?php }
}

?>