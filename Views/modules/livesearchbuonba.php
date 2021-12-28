<?php 
require_once("../../config.php");
require_once("../../Core/Database.php");
// require_once("../../Core/load.php");
require_once("../../Models/Book.php");
$book = new Book();
$allBooks = $book->getAllBook();
$allBooksName = array();
if ($allBooks->num_rows > 0) {
    while ($bookName = $allBooks->fetch_assoc()) {
        $bName = $bookName['Tensach'];
        $allBooksName[] = $bName;
    }
}
$q = $_REQUEST["q"];
$hint = "";
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($allBooksName as $bName) {
        if (stristr($q, substr($bName, 0, $len))) {
            if ($hint === "") {
                $hint = $bName;
            } else {
                $hint .= ", $bName";
            }
        }
    }
}
echo $hint === "" ? "no result" : $hint;
// print_r($allBooksName);
?>
