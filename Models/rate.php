<?php
$connect = mysqli_connect("localhost", "root", "", "docsach");
mysqli_query($connect, "SET NAMES 'utf8'");

if (isset($_REQUEST['user']) && isset($_REQUEST['idsach']) && isset($_REQUEST['sosao'])) {
    $user = $_REQUEST['user'];
    $idsach = $_REQUEST['idsach'];
    $sosao = $_REQUEST['sosao'];
    $sql = "select * from tblaccount where username ='" . $user . "'";
    $result = mysqli_query($connect, $sql);
    $iduser = "";
    while ($row = $result->fetch_assoc()) {
        $iduser = $row['idMember'];
    }
    $rate = mysqli_query($connect, "select * from rate where idSach=" . $idsach . " and idMember=" . $iduser);
    if ($rate != false && $rate->num_rows > 0)
        $sql = "update rate set sosao=" . $sosao . " where idSach=" . $idsach . " and idMember=" . $iduser;
    else
        $sql = "insert into rate values(" . $idsach . "," . $iduser . "," . $sosao . ");";
    mysqli_query($connect, $sql);
    $sql = "select idSach,avg(sosao) as sosao from rate where idSach =" . $_REQUEST['idsach'] . " group by idSach";
    $rate = 0;
    $result = mysqli_query($connect, $sql);
    if (
        $result != false && $result->num_rows > 0
    ) {
        while ($row = $result->fetch_assoc())
            $rate = $row['sosao'];
    }
    echo round($rate, 1) . "★";
?>

<?php } ?>