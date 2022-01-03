<?php
$rowmember = array();
$member = loadModel('Member');
// $idMember = '';
// $username = '';
// $username = '';
// $password = '';
// $email = '';
// $IMG = '';
// $Ngaysinh = '';
// $Gioitinh = '';
$result = $member->get_member($_REQUEST['condition']);
while ($rowmember = $result->fetch_assoc()) {
    $idMember = $rowmember['idMember'];
    if ($rowmember['MemberName'] == null)
        $username = $rowmember['username'];
    else
        $username = $rowmember['MemberName'];
    $password = $rowmember['password'];
    $email = $rowmember['email'];
    $IMG = $rowmember['ImgAvatar'];
    $Ngaysinh = $rowmember['Ngaysinh'];
    $Gioitinh = $rowmember['Gioitinh'];
}
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
    <a href="<?php echo 'index.php?condition=' . $_REQUEST['condition']; ?>">Trang chủ</a>
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
    <?php loadModule('searchBook'); ?>
    <div class="member-container">
        <div class="nav-drop member">
            <a href=""><img src="<?php echo $IMG; ?>" alt=""></a>
            <div class="drop-content">
                <a href=""><i class="fas fa-user-cog"></i> <?php echo $username; ?></a>
                <a href=""><i class="fas fa-book"></i> Thư viện</a>
                <a href=""><i class="fas fa-bell"></i> Thông báo</a>
                <a href=""><i class="fas fa-key"></i> Đổi mật khẩu</a>
                <a href="index.php?option=login"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
            </div>
        </div>
    </div>
    <!-- <ul class="infor_member">
        <li class="library"><a href=""><img src="Public/images/icon_thuvien.png" alt="thư viện"></a></li>
        <li class="notification"><a href=""><img src="Public/images/icon_tb.png" alt="thông báo"></a></li>
        <li class="personal"><a href=""><img src="<?php //echo $IMG; 
                                                    ?>" alt="<?php //echo $username; 
                                                                ?>"><?php echo $username; ?></a>
            <ul class="personal">
                <li><a href="">thông tin cá nhân</a></li>
                <li><a href="">Đổi mật khẩu</a></li>
                <li><a href="index.php">Đăng xuất</a></li>
            </ul>
        </li>
    </ul> -->
</div>