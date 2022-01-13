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

<nav class="navbar navbar-expand-md fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href=".">
            <img src="Public\images\logo_light.png" alt="Logo Owl" width="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item px-3">
                    <a class="nav-link active" href="<?php echo 'index.php?condition=' . $_REQUEST['condition']; ?>">Trang chủ</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">
                        Thể loại
                    </a>
                    <ul class="dropdown-menu">
                        <?php while ($result = $category->fetch_assoc()) { ?>
                            <li>
                                <a class="dropdown-item" href="<?php loadHrefCategory($result['idDanhmuc']); ?>"><?php echo $result['Tendanhmuc']; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">
                        Ngôn ngữ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Tiếng Việt</a></li>
                        <li><a class="dropdown-item" href="">Tiếng Anh</a></li>
                    </ul>
                </li>
            </ul>
            <?php loadModule('searchBook'); ?>
            <ul class="navbar-nav me-5 mb-2 mb-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" href="#">
                        <img height="35" class="ms-5 rounded-3" src="<?php echo $IMG; ?>" alt="<?php echo $username; ?>">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="index.php?option=member"><i class="fas fa-user-cog"></i> <?php echo $username; ?></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-book"></i> Thư viện</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-bell"></i> Thông báo</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-key"></i> Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.php?option=login"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>