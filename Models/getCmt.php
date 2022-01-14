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
    <h4>Cảm nhận của bạn</h4>
    <?php
    if (true) {
        while ($cmt_row = $result->fetch_assoc()) {
            $dateCmt = strtotime($cmt_row['Thoigian']);
            $parts = getdate($dateCmt); ?>
            <div class="custom-card p-3 mt-4 text-justify d-flex">
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
    <?php }
    } ?>
<?php } ?>