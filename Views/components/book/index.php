<?php
$row = array();
$book = loadModel('Book');
$result = $book->get_bookcurrent($_REQUEST['idSach']);
while ($row = $result->fetch_assoc()) {
    $imgSach = $row['imgSach'];
    $Tensach = $row['Tensach'];
    $Tacgia = $row['Tacgia'];
    $nd = $row['TomtatND'];
}

?>
<!-- Phần content -->
<div class="fluid-container mt-5 mx-3">
    <div class="fixed-listcate" id="listcategoryDropdown">
        <div class="main">
            <div class="content">
                <nav id="menu" class="menu">
                    <div class="morph-shape" data-morph-open="M158.5,0H0v53.1c0,0,19.6-4.6,66-0.2s60.5-3.8,92.5-0.1V0z" data-morph-trans="M158.5,0H0v53.1c0,0,35.4,15.4,82,13.8s76.5-14.1,76.5-14.1V0z">
                        <svg width="100%" height="100%" viewBox="0 0 158.5 61.2" preserveAspectRatio="none">
                            <path fill="none" d="M158.5,0H0v55.6c20.9-12.8,38.5,19.5,73.5-1.9s73.2-7.2,85,0V0z" />
                        </svg>
                    </div>
                    <button class="menu__label"><i class="fa fa-fw fa-bars"></i><span>Menu</span></button>
                    <ul class="menu__inner">
                        <li><a href="#"><i class="fa fa-fw fa-bookmark"></i><span>Danh sách đọc</span></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-heart"></i><span>Yêu thích</span></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-image"></i><span>Gì gì đó</span></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-heart-o"></i><span>Gì gì đó</span></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>Gì gì đó</span></a></li>
                        <li><a href="#"><i class="fa fa-fw fa-bell-o"></i><span>Gì gì đó</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
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
<<<<<<< HEAD
=======
            <div class="fixed-listcate fixed-top" id="listcategoryDropdown">
                <div class="main">
                    <div class="content">
                        <nav id="menu" class="menu">
                            <div class="morph-shape" data-morph-open="M158.5,0H0v53.1c0,0,19.6-4.6,66-0.2s60.5-3.8,92.5-0.1V0z" data-morph-trans="M158.5,0H0v53.1c0,0,35.4,15.4,82,13.8s76.5-14.1,76.5-14.1V0z">
                                <svg width="100%" height="100%" viewBox="0 0 158.5 61.2" preserveAspectRatio="none">
                                    <path fill="none" d="M158.5,0H0v55.6c20.9-12.8,38.5,19.5,73.5-1.9s73.2-7.2,85,0V0z" />
                                </svg>
                            </div>
                            <button class="menu__label"><i class="fa fa-fw fa-bars"></i><span>Menu</span></button>
                            <ul class="menu__inner">


                                <li><a href="#"><i class="fa fa-fw fa-bookmark"></i><span>Danh sách đọc</span></a></li>
                                <li><a href="#"><i class="fa fa-fw fa-heart"></i><span>Yêu thích</span></a></li>
                                <li><a href="#"><i class="fa fa-fw fa-image"></i><span>Gì gì đó</span></a></li>
                                <li><a href="#"><i class="fa fa-fw fa-heart-o"></i><span>Gì gì đó</span></a></li>
                                <li><a href="#"><i class="fa fa-fw fa-envelope-o"></i><span>Gì gì đó</span></a></li>
                                <li><a href="#"><i class="fa fa-fw fa-bell-o"></i><span>Gì gì đó</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
>>>>>>> 3f12840da2af50b046cb9588ac53ea025e222ca0
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
        <?php $result = $book->getChapter($_REQUEST['idSach']);
        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()) { ?>
            <a href="<?php if (isset($_REQUEST['condition'])) echo  'index.php?condition=' . $_REQUEST['condition'] . '&option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=' . $row['TenChuong'] . '&page=1&kitu=0'; ?>"><span> <?php echo $row['TenChuong']; ?></span></a>
        <?php        }
        ?>
    </div>
    <div class="row">
        <?php loadModule('cmt_book'); ?>
    </div>
    <div class="row">
        <?php loadModule('new_book'); ?>
    </div>
</div>