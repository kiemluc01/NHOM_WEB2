<?PHP
include('Listbook.php');
$cat = new Listbook();
$result = $cat->getAll();
$row = array();
if($result->num_rows>0)
while($row1 = $result->fetch_assoc())
    $row = $row1;
    echo json_encode($row);