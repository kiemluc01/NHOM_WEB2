<?php
$row = array();
$book = loadModel('Book');
$sotrang = 0;
$result = $book->get_bookcurrent($_REQUEST['idSach']);
while ($row = $result->fetch_assoc()) {
    $sotrang = $row['Sotrang'];
}
?>
<h1><?php echo 'Trang số ' . $_REQUEST['page']; ?></h1>
<center>
    <div class="container_page">
        <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=1'; ?>" class="page">
            << </a>
                <?php
                if ($_REQUEST['page'] != 1) { ?>
                    <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $_REQUEST['page'] - 1; ?>" class="page">
                        < </a>
                        <?php }

                    if ($_REQUEST['page'] == $sotrang) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $_REQUEST['page'] - 1; ?>" class="page">
                                <?php echo ($_REQUEST['page'] - 1); ?> </a>
                        <?php }
                    for ($i = $_REQUEST['page'] + 1, $d = 1; $i <= $sotrang; $i++, $d++) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $i; ?>" class="page"><?php echo $i; ?></a>

                            <?php
                            if ($d == 10) { ?>
                                <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $_REQUEST['page'] + 1; ?>" class="page"> > </a>
                            <?php break;
                            }
                        }
                        if ($sotrang - $_REQUEST['page'] > 0 && $sotrang - $_REQUEST['page'] <= 9) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $_REQUEST['page'] + 1; ?>" class="page"> > </a>
                        <?php }
                        ?>
                        <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $sotrang; ?>" class="page">
                            >> </a>
    </div>
</center>