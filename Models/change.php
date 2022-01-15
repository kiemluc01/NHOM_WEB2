<?php
$connect = mysqli_connect("localhost", "root", "", "docsach");
mysqli_query($connect, "SET NAMES 'utf8'");
if (isset($_REQUEST['pass']) && isset($_REQUEST['user'])) {
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    $sql = "update tblaccount set password = " . $pass . " where username ='" . $user . "'";
    mysqli_query($connect, $sql);
}
