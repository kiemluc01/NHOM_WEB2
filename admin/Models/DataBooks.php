<?php
$conn = new PDO("mysql:host=localhost;dbname=docsach;charset=utf8","root","");
$idDanhmuc = 0;
if(isset($_GET['idDanhmuc']))
$idDanhmuc = $_GET['idDanhmuc'];
settype($idDanhmuc,"int");
$stmt = $conn->prepare("select * from tblsach where idDanhmuc=?");
$stmt->execute([$idDanhmuc]);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
