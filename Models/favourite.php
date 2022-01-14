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
            echo "thích";
        } else echo mysqli_error($connect);
    } else {
        if (mysqli_query($connect, "insert into tblfavorite values(" . $idsach . "," . $iduser . ");")) {
            echo "bỏ thích";
        } else echo mysqli_error($connect);
    }
?>

<?php } ?>