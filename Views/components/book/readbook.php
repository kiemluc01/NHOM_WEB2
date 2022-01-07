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
        <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=' . $_REQUEST['chapter'] . '&page=1&kitu=0'; ?>" class="page">
            << </a>
                <?php
                if ($_REQUEST['page'] != 1) { ?>
                    <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=' . $_REQUEST['chapter'] . '&page=' . ($_REQUEST['page'] - 1) . '&kitu=' . $book->loadkitu(($_REQUEST['page'] - 1), $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page">
                        < </a>
                        <?php }

                    if ($_REQUEST['page'] == $sotrang) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=' . $_REQUEST['chapter'] . '&page=' . ($_REQUEST['page'] - 1) . '&kitu=' . $book->loadkitu(($_REQUEST['page'] - 1), $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page">
                                <?php echo ($_REQUEST['page'] - 1); ?> </a>
                        <?php }
                    for ($i = $_REQUEST['page'] + 1, $d = 1; $i <= $sotrang; $i++, $d++) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=' . $_REQUEST['chapter'] . '&page=' . $i . '&kitu=' . $book->loadkitu($i, $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page"><?php echo $i; ?></a>

                            <?php
                            if ($d == 10) { ?>
                                <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=' . $_REQUEST['chapter'] . '&page=' . $_REQUEST['page'] + 1; ?>" class="page"> > </a>
                            <?php break;
                            }
                        }
                        if ($sotrang - $_REQUEST['page'] > 0 && $sotrang - $_REQUEST['page'] <= 9) { ?>
                            <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=' . $_REQUEST['chapter'] . '&page=' . ($_REQUEST['page'] + 1) . '&kitu=' . $book->loadkitu(($_REQUEST['page'] + 1), $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page"> > </a>
                        <?php }
                        ?>
                        <a href="<?php echo 'index.php?condition=kiemlucnguyen&option=book&idSach=1&chapter=' . $_REQUEST['chapter'] . '&page=' . $sotrang . '&kitu=' . $book->loadkitu($sotrang, $_REQUEST['idSach'], $_REQUEST['chapter']); ?>" class="page">
                            >> </a>
    </div>

</center>
<div class="Chapters">
    <p>Danh Sách Chương</p>
    <div style="display:flex; width:40%;justify-content: space-between;">
        <div>
            <?php $result = $book->getChapter($_REQUEST['idSach']);
            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    if ($i % 2 == 1) { ?>
                        <a style="display:block;" href="<?php if (isset($_REQUEST['condition'])) echo  'index.php?condition=' . $_REQUEST['condition'] . '&option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=' . $row['TenChuong'] . '&page=1&kitu=0'; ?>"><span> <?php echo $row['TenChuong']; ?></span></a>
            <?php }
                    $i++;
                }
            }
            ?>
        </div>
        <div>
            <?php $result = $book->getChapter($_REQUEST['idSach']);
            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    if ($i % 2 != 1) { ?>
                        <a style="display:block;" href="<?php if (isset($_REQUEST['condition'])) echo  'index.php?condition=' . $_REQUEST['condition'] . '&option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=' . $row['TenChuong'] . '&page=1&kitu=0'; ?>"><span> <?php echo $row['TenChuong']; ?></span></a>
            <?php }
                    $i++;
                }
            }
            ?>
        </div>
    </div>

</div>