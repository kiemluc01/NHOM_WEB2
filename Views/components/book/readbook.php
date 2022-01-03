<?php
$row = array();
$book = loadModel('Book');
$sotrang = $book->loadSotrang($_REQUEST['idSach'], $_REQUEST['chapter']);
$result = $book->get_bookcurrent($_REQUEST['idSach']);

?>
<div id="content_readbook" class="content_chapter">
    <pre><?php echo $book->convert_text($book->TachPage($_REQUEST['idSach'], $_REQUEST['chapter'])); ?></pre>
</div>
<center>
    <div class="container_page">
        <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=1&kitu=0'; ?>" class="page">
            << </a>
                <?php
                if ($_REQUEST['page'] != 1) { ?>
                    <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . ($_REQUEST['page'] - 1) . '&kitu=' . $book->loadkitu(($_REQUEST['page'] - 1), $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page">
                        < </a>
                        <?php }

                    if ($_REQUEST['page'] == $sotrang) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . ($_REQUEST['page'] - 1) . '&kitu=' . $book->loadkitu(($_REQUEST['page'] - 1), $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page">
                                <?php echo ($_REQUEST['page'] - 1); ?> </a>
                        <?php }
                    for ($i = $_REQUEST['page'] + 1, $d = 1; $i <= $sotrang; $i++, $d++) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $i . '&kitu=' . $book->loadkitu($i, $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page"><?php echo $i; ?></a>

                            <?php
                            if ($d == 10) { ?>
                                <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $_REQUEST['page'] + 1; ?>" class="page"> > </a>
                            <?php break;
                            }
                        }
                        if ($sotrang - $_REQUEST['page'] > 0 && $sotrang - $_REQUEST['page'] <= 9) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . ($_REQUEST['page'] + 1) . '&kitu=' . $book->loadkitu(($_REQUEST['page'] + 1), $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page"> > </a>
                        <?php }
                        ?>
                        <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=1&page=' . $sotrang . '&kitu=' . $book->loadkitu($sotrang, $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page">
                            >> </a>
    </div>
</center>