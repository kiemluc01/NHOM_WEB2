<?php
$book = loadModel('Book');
$category = $book->get_category_all();
?>

<nav class="navbar navbar-expand-md fixed-top bg-info">
    <div class="container-fluid">
        <a href="." class="navbar-brand">
            <img src="admin/Public/images/logo_light.png" alt="Logo Owl" width="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item px-3">
                    <a class="nav-link active text-light" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" href="#">
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
                    <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" href="#">
                        Ngôn ngữ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Tiếng Việt</a></li>
                        <li><a class="dropdown-item" href="">Tiếng Anh</a></li>
                    </ul>
                </li>
            </ul>
            <?php require("searchBook.php"); ?>
            <ul class="navbar-nav me-5 mb-2 mb-md-0">
                <li class="nav-item ms-5">
                    <a class="nav-link text-light" href="index.php?option=login">Đăng nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?option=register">Đăng ký</a>
                </li>
            </ul>
        </div>
    </div>
</nav>