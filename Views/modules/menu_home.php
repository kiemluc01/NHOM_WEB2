<?php
$book = loadModel('Book');
$category = $book->get_category_all();

?>
<div id="menu_main">
    <ul class="nav">
        <li class="logo"><img src="Public/images/logo.jpg" alt="" class="logo"></li>
        <li class="nav"><a href="index.php">Trang chủ</a></li>
        <li class="nav"><a href="">Thể loại</a>
            <ul class="sub_menu">
                <?php while ($result = $category->fetch_assoc()) { ?>
                    <li><a href="<?php loadHrefCategory($result['idDanhmuc']); ?>"><?php echo $result['Tendanhmuc']; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li class="nav"><a href="">Ngôn ngữ</a>
            <ul class="sub_menu">
                <li><a href="">Tiếng Việt</a></li>
                <li><a href="">Tiếng Anh</a></li>
            </ul>
        </li>
        <li>
            <form action="" class="find">
                <input type="text" name="" id="" placeholder="tìm kiếm" class="find">
                <a href="" class="find"><img src="Public/images/icon_find.png" alt="" class="find"></a>
            </form>
        </li>
    </ul>
    <ul class="login">
        <li class="login"><a href="index.php?option=login">Đăng nhập</a></li>
        <li class="register"><a href="index.php?option=register">Đăng ký</a></li>
    </ul>
</div>