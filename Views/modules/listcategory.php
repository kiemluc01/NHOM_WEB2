<div class="fluid-container">
    <div class="row">
        <div class="col-lg-3" id="listcategoryDropdown">
            <div class="main listcate">
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
            </div><!-- /main -->
        </div>
        <div class="col-lg-9 mt-lg-5">
            <?php
            //Thong so ket noi CSDL
            $book = loadModel('Book');
            if (isset($_REQUEST['category']))
                $result = $book->get_category($_REQUEST['category']);
            else
                $result = $book->get_category_all();
            if ($result->num_rows > 0) {
                while ($rowCtg = $result->fetch_assoc()) {  ?>
                    <div id="category">
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
    </div>
</div>