<?php
$row = array();
$book = loadModel('Book');
$book->Views();
$sotrang = $book->loadSotrang($_REQUEST['idSach'], $_REQUEST['chapter']);
$result = $book->get_bookcurrent($_REQUEST['idSach']);
$chapterContent = $book->chapterContent($_REQUEST['idSach'], $_REQUEST['chapter']);
?>

<div class="fluid-container mt-5 mx-3">
    <div class="row">
        <div class="col-lg-3 col-md-12 pe-md-5">
            <div class="d-flex flex-column flex-shrink-0 px-3 pt-3 text-black custom-card-2 mb-md-3">
                <h4 class="text-white mb-3">Mục lục</h4>
                <input type="text" id="searchChapName" class="mb-3 px-3 py-2 form-control" placeholder="Nhập tên chương ..." onkeyup="searchChapterName()">
                <ul id="chapterNameList" class="nav flex-column mb-auto">
                    <?php $result = $book->getChapter($_REQUEST['idSach']);
                    if ($result->num_rows > 0) {
                        $i = 1;
                        while ($row = $result->fetch_assoc()) { ?>
                            <li class="nav-item bg-white mb-3 rounded-3">
                                <a class="nav-link text-black" href="<?php if (isset($_REQUEST['condition'])) echo  'index.php?condition=' . $_REQUEST['condition'] . '&option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=' . $row['TenChuong'] . '&page=1&kitu=0'; ?>">
                                    <?php echo $row['TenChuong']; ?>
                                </a>
                            </li>
                    <?php
                            $i++;
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-12">
            <!-- <h1><?php echo $book->loadBookName($_REQUEST['idSach']); ?></h1> -->
            <!-- <p><?php echo nl2br($book->TachPage($_REQUEST['idSach'], $_REQUEST['chapter'])); ?></p> -->
            <div class="flip-book html-book demo-book" id="demoBookExample" style="background-image: url(Public\images\css\background.jpg);">
                <div class="page page-cover page-cover-top" data-density="hard">
                    <div class="page-content">
                        <h2><?php echo $book->loadBookName($_REQUEST['idSach']); ?></h2>
                    </div>
                </div>
                <div class="page">
                    <div class="page-content">
                        <h2 class="page-header">Ngày chưa giông bão</h2>
                        <div class="page-text"><?php echo nl2br($chapterContent); ?></div>
                        <div class="page-footer">2</div>
                    </div>
                </div>
                <div class="page page-cover page-cover-bottom" data-density="hard">
                    <div class="page-content">
                        <h2>THE END</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>
<!-- <div class="container-md" style="position: relative;">
    <div class="flip-book html-book demo-book" id="demoBookExample" style="background-image: url(Public\images\css\background.jpg);">
        <div class="page page-cover page-cover-top" data-density="hard">
            <div class="page-content">
                <h2><?php echo $book->loadBookName($_REQUEST['idSach']); ?></h2>
            </div>
        </div>
        <div class="page">
            <div class="page-content">
                <h2 class="page-header">Ngày chưa giông bão</h2>
                <div class="page-text"><?php echo nl2br($chapterContent); ?></div>
                <div class="page-footer">2</div>
            </div>
        </div>
        <div class="page page-cover page-cover-bottom" data-density="hard">
            <div class="page-content">
                <h2>THE END</h2>
            </div>
        </div>
    </div>
</div> -->
<!-- <center>
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

</center> -->