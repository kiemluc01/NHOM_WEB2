<?php
$str = $_REQUEST['find'];

$book = loadModel('book');
$resultBook =  $book->Find_book($str);
if ($resultBook->num_rows > 0) { ?>
    <div class="fluid-container">
        <div class="row">
            <div class="col-lg-3">
                <!-- id="listcategoryDropdown" -->
                <div class="main listcate">
                    <!-- <div class="content">
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
                </div> -->
                    <div class="content">
                        <nav id="menu" class="menu menu--open">
                            <div class="morph-shape" data-morph-open="M158.5,0H0v53.1c0,0,19.6-4.6,66-0.2s60.5-3.8,92.5-0.1V0z" data-morph-trans="M158.5,0H0v53.1c0,0,35.4,15.4,82,13.8s76.5-14.1,76.5-14.1V0z">
                                <svg width="100%" height="100%" viewBox="0 0 158.5 61.2" preserveAspectRatio="none">
                                    <path fill="none" d="M158.5,0C158.5,0,0,0,0,0C0,0,0,53.1,0,53.1C0,53.1,19.6,48.5,66,52.9C112.4,57.3,126.5,49.1,158.5,52.8C158.5,52.8,158.5,0,158.5,0C158.5,0,158.5,0,158.5,0"></path>
                                    <desc>Created with Snap</desc>
                                    <defs></defs>
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
                </div><!-- /main -->
            </div>
            <div class="col-lg-9 mt-lg-5">
                <h2 id="sticky-bar" class="py-3 ps-5 bg-info rounded-bottom"><?php echo 'kết quả tìm kiếm cho "' . $str . '"'; ?></h2>
                <div class="clear-fix list-book-container">
                    <div class="list-item-container">
                        <?php
                        while ($rowBook = $resultBook->fetch_assoc()) {
                            $idSach = $rowBook['idSach']; ?>
                            <div class="book-item">
                                <form method="get">
                                    <div class="book-container">
                                        <!-- note: remember to design the cover of the book -->
                                        <div class="book-cover-container">
                                            <div class="book-cover">
                                                <a href="<?php loadHrefBook($rowBook['idSach']); ?>" class="listbook">
                                                    <div class="front">
                                                        <div class="cover">
                                                            <img class="book-cover-img" src="<?php echo $rowBook['imgSach']; ?>" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="left-side"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="book-title">
                                <cite><?php echo $rowBook["Tensach"]; ?></cite>
                            </div> -->
                                        <div class="book-author">
                                            <em><?php echo $rowBook["Tacgia"]; ?></em>
                                        </div>
                                        <div class="book-view">
                                            <div class="book-view-detail">
                                                <i class="fas fa-eye"></i> <?php echo $rowBook["Luotxem"]; ?>
                                            </div>
                                            <div class="book-view-detail">
                                                <i class="fas fa-comments"></i> <?php echo $rowBook["Feedback"]; ?>
                                            </div>
                                            <div class="book-view-detail">
                                                <i class="fab fa-gratipay"></i> <?php echo $rowBook["Favorite"]; ?>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            <?php } ?>
            <div class="row">
                <?php loadModule('involve_ book'); ?>
            </div>
            </div>

        </div>

    </div>