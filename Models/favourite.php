<?php
$connect = mysqli_connect("localhost", "root", "", "docsach");
mysqli_query($connect, "SET NAMES 'utf8'");

if (isset($_REQUEST['user']) && isset($_REQUEST['idsach'])) {
    $user = $_REQUEST['user'];
    $idsach = $_REQUEST['idsach'];
    $sql = "select * from tblaccount where username ='" . $user . "'";
    $result = mysqli_query($connect, $sql);
    $iduser = "";
    while ($row = $result->fetch_assoc()) {
        $iduser = $row['idMember'];
    }
    $sql = "select * from tblfavorite where idSach =" . $idsach . " and idMember=" . $iduser;
    $result = mysqli_query($connect, $sql);
    if ($result->num_rows > 0) {
        if (mysqli_query($connect, "delete from tblfavorite where idSach =" . $idsach . " and idMember=" . $iduser)) {
            echo "";
        } else echo mysqli_error($connect);
    } else {
        if (mysqli_query($connect, "insert into tblfavorite values(" . $idsach . "," . $iduser . ");")) {
            echo "";
        } else echo mysqli_error($connect);
    }
?>

    <?php } else {
    $idmember = $_REQUEST['idmember'];
    $idsach = $_REQUEST['idsach'];
    $sql = "delete from tblfavorite where idSach = " . $idsach . " and idMember =" . $idmember;
    if (mysqli_query($connect, $sql)) {
        $sql = "select a.idSach,a.idMember,b.Tensach,imgSach from tblfavorite as a,tblsach as b where a.idSach = b.idSach and idMember = " . $idmember;
        $result = mysqli_query($connect, $sql);
        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
    ?>
            <li class="list-group-item p-3 d-flex gap-3">
                <div>
                    <img src="<?php echo (substr($row['imgSach'], 0, 4) == "http" ? $row['imgSach'] : "admin/" . $row['imgSach']);
                                ?>" alt="" width="80">
                </div>
                <div class="d-flex flex-column justify-content-between flex-grow-1">
                    <div><a href="#"><?php $row['imgSach']; ?></a></div>
                    <div class="text-end"><a id-member="<?php echo $row['idMember']; ?>" id-book="<?php echo $row['idSach']; ?>" class="del_f">Xoá khỏi danh sách yêu thích</a></div>
                </div>
            </li>
<?php    }
    }
}
?>