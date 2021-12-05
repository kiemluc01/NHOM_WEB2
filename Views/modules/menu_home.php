<?php
$book = loadModel('Book');
$category = $book->get_category_all();

?>
<div class="header-top">
    <div class="header-img">
        <img src="Public\images\logo_main.png" alt="">
    </div>
</div>
<div id="menu_main">
    <a href="."><img src="Public\images\logo_light.png" alt="" class="logo"></a>
    <a href="index.php">Trang chủ</a>
    <div class="nav-drop">
        <button class="dropbtn">Thể loại <i class="fa fa-caret-down"></i></button>
        <div class="drop-content">
            <?php while ($result = $category->fetch_assoc()) { ?>
                <a href="<?php loadHrefCategory($result['idDanhmuc']); ?>"><?php echo $result['Tendanhmuc']; ?></a>
            <?php } ?>
        </div>
    </div>
    <div class="nav-drop">
        <button class="dropbtn">Ngôn ngữ <i class="fa fa-caret-down"></i></button>
        <div class="drop-content">
            <a href="">Tiếng Việt</a>
            <a href="">Tiếng Anh</a>
        </div>
    </div>
    <div class="search-container">
        <form action="" class="find">
            <input type="text" name="find" id="" placeholder="Tìm kiếm .." class="find">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="login-container">
        <a href="index.php?option=login">Đăng nhập</a>
        <a href="index.php?option=register">Đăng ký</a>
    </div>
</div>