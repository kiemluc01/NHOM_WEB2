<?php
$row = array();
$book = loadModel('Book');
$book->Views();
$result = $book->get_bookcurrent($_REQUEST['idSach']);
while ($row = $result->fetch_assoc()) {
    if (substr($row['imgSach'], 0, 4) == "http")
        $imgSach = $row['imgSach'];
    else
        $imgSach = "admin/" . $row['imgSach'];
    $Tensach = $row['Tensach'];
    $Tacgia = $row['Tacgia'];
    $nd = $row['TomtatND'];
}
?>
<!-- Phần content -->
<div class="fluid-container mt-5 mx-3">
    <div class="row">
        <div class="col-lg-3 col-md-12 pe-md-5">
            <div class="wrapper-custom-3d-book mt-5">
                <div class="book">
                    <div class="inner-book">
                        <div class="img" style="padding-top: calc(1.07 * 100%)">
                            <img src="<?php echo $imgSach; ?>" alt="Book Cover Image">
                        </div>
                        <div class="page"></div>
                        <div class="page page-2"></div>
                        <div class="page page-3"></div>
                        <div class="page page-4"></div>
                        <div class="page page-5"></div>
                        <div class="img final-page" style="padding-top: calc(1.07 * 100%)">
                            <img src="<?php echo $imgSach; ?>" alt="Book Cover Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-12 px-sm-0 px-lg-5">
            <div class="row">
                <div class="wrapper-custom-book-info">
                    <div class="custom-book-info-box">
                        <h1 class="custom-book-info-heading"><?php echo $Tensach; ?></h1>
                    </div>
                    <div class="custom-book-info-box">
                        <h2 class="[  custom-book-info-heading  custom-book-info-heading--2  ]"><em><?php echo $Tacgia; ?></em></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="#" method="post" class="clear-fix">
                    <div id="rating">
                        <input type="radio" id="star5" name="rating" value="5">
                        <label class="full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label class="full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                    </div>
                    <div id="add-favourite">
                        <input type="checkbox" name="favourite" id="favour" value="1">
                        <label for="favour"></label>
                        <!-- <span>Thêm vào yêu thích</span>  -->
                    </div>
                </form>
                <div class="intro">
                    <p><?php echo nl2br($nd) ?></p>
                </div>
                <a class="btn btn-lg text-light btn-info fw-bold border-info bg-info" href="<?php loadHrefReadBook(); ?>" id="read">Đọc từ đầu</a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 col-md-12 pe-md-5">
        </div>
        <div class="col-lg-9 col-md-12 px-sm-0 px-lg-5 mt-5">
            <div class="custom-book-info-box mb-4">
                <h3 class="[  custom-book-info-heading  custom-book-info-heading--3  ]">Mục lục</h3>
            </div>
            <?php $result = $book->getChapter($_REQUEST['idSach']);
            if ($result->num_rows > 0)
                while ($row = $result->fetch_assoc()) { ?>
                <p><a href="<?php if (isset($_REQUEST['condition'])) echo  'index.php?condition=' . $_REQUEST['condition'] . '&option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=' . $row['TenChuong'] . '&page=1&kitu=0'; ?>"><span> <?php echo $row['TenChuong']; ?></span></a></p>
            <?php
                }
            ?>
        </div>
    </div>
    <div class="row mt-3">
        <?php loadModule('cmt_book'); ?>
    </div>
    <div class="row mt-3">
        <?php loadModule('new_book'); ?>
    </div>
</div>