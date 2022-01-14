<div class="container">
    <?php
    //Thong so ket noi CSDL
    $book = loadModel('Book');
    if (isset($_REQUEST['category']))
        $result = $book->get_category($_REQUEST['category']);
    else
        $result = $book->get_category_all();
    if ($result->num_rows > 0) {
        while ($rowCtg = $result->fetch_assoc()) {  ?>
            <div class="row">
                <?php
                // session_start();
                $_SESSION['rowDM'] = $rowCtg;
                $_SESSION['idDM'] = $rowCtg['idDanhmuc'];
                $_SESSION['book'] = $book;
                loadModule('listbook');
                ?>
            </div>
    <?php }
    }
    ?>
</div>