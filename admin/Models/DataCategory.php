<?php
$conn = new PDO("mysql:host=localhost;dbname=docsach;charset=utf8","root","");
$stmt = $conn->prepare(" select a.*,b.Tendanhmuc from tblsach as a, tbldanhmuc as b where a.idDanhmuc = b.idDanhmuc");
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);