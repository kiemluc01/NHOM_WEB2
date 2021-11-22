<?php
$rowmember = array();
$member = loadModel('Member');
$result = $member->get_member($_REQUEST['condition']);
while ($rowmember = $result->fetch_assoc()) {
    $idMember = $rowmember['idMember'];
    $username = $rowmember['username'];
    $password = $rowmember['password'];
    $email = $rowmember['email'];
    $IMG = $rowmember['IMG'];
    $Ngaysinh = $rowmember['Ngaysinh'];
    $Gioitinh = $rowmember['Gioitinh'];
}
$book = loadModel('Book');
$category = $book->get_category_all();
?>
<div id="menu_main">
    <ul class="nav">
        <li class="logo"><img src="Public/images/logo.jpg" alt="" class="logo"></li>
        <li class="nav"><a href="<?php echo 'index.php?condition=' . $_REQUEST['condition']; ?>">Trang chủ</a></li>
        <li class="nav"><a href="">Thể loại</a>
            <ul class="sub_menu">
                <?php while ($result = $category->fetch_assoc()) { ?>
                    <li><a href="<?php loadHrefCategory($result['idDanhmuc']); ?>"><?php echo $result['Tendanhmuc']; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li class="nav"><a href="">Ngôn ngữ</a></li>
        <li>
            <form action="" class="find">
                <input type="text" name="" id="" placeholder="tìm kiếm" class="find">
                <a href="" class="find"><img src="Public/images/icon_find.png" alt="" class="find"></a>
            </form>
        </li>
    </ul>
    <ul class="infor_member">
        <li class="library"><a href=""><img src="Public/images/icon_thuvien.png" alt="thư viện"></a></li>
        <li class="notification"><a href=""><img src="Public/images/icon_tb.png" alt="thông báo"></a></li>
        <li class="personal"><a href=""><img src="<?php echo $IMG; ?>" alt="<?php echo $username; ?>"><?php echo $username; ?></a>
            <ul class="personal">
                <li><a href="">thông tin cá nhân</a></li>
                <li><a href="">Đổi mật khẩu</a></li>
                <li><a href="index.php">Đăng xuất</a></li>
            </ul>
        </li>
    </ul>
</div>