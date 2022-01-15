<?php
$row = array();
$book = loadModel('Book');
$member = loadModel('Member');
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
                        <?php
                        if (isset($_SESSION['user'])) {
                            $sosao = $book->checkRate();
                            for ($i = 5; $i >= 1; $i--) {
                                if ($i == $sosao) { ?>
                                    <input type="radio" id="star<?php echo $i ?>" name="rating" value="<?php echo $i ?>" checked>
                                    <label class="full" for="star<?php echo $i ?>" title="Awesome - <?php echo $i ?> stars"></label>
                                <?php } else {
                                ?>
                                    <input type="radio" id="star<?php echo $i ?>" name="rating" value="<?php echo $i ?>">
                                    <label class="full" for="star<?php echo $i ?>" title="Awesome - <?php echo $i ?> stars"></label>
                            <?php
                                }
                            }
                        } else { ?>
                            <input type="radio" id="star1" name="rating" value="1"><label class="full" for="star1" title="Awesome - 1 stars"></label><input type="radio" id="star2" name="rating" value="2"><label class="full" for="star2" title="Awesome - 2 stars"></label><input type="radio" id="star3" name="rating" value="3"><label class="full" for="star3" title="Awesome - 3 stars"></label><input type="radio" id="star4" name="rating" value="4"><label class="full" for="star4" title="Awesome - 4 stars"></label><input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                        <?php }
                        ?>
                        <p id="rate_percent"><?php echo $book->getRate(); ?>★</p>
                    </div>
                    <div id="add-favourite">

                        <?php if (isset($_REQUEST['user'])) {
                            if ($book->check_f()) {
                        ?>
                                <input type="checkbox" name="favourite" id="favour" value="1" checked>
                                <label for="favour" id="favourite"></label> <?php } else { ?>
                                <input type="checkbox" name="favourite" id="favour" value="1">
                                <label for="favour" id="favourite"></label>
                            <?php }
                                                                    } else { ?>
                            <input type="checkbox" name="favourite" id="favour" value="1"><label for="favour" id="favourite"></label>
                        <?php }
                        ?>
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
            <div class="list-group">
                <?php $result = $book->getChapter($_REQUEST['idSach']);
                if ($result->num_rows > 0)
                    while ($row = $result->fetch_assoc()) { ?>
                    <a class="list-group-item list-group-item-action" href="<?php echo  'index.php?option=book&idSach=' . $_REQUEST['idSach'] . '&chapter=' . $row['TenChuong'] . '&page=1&kitu=0'; ?>"><span> <?php echo $row['TenChuong']; ?></span></a>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <?php loadModule('cmt_book'); ?>
    </div>
    <div class="row mt-3">
        <?php loadModule('new_book'); ?>
    </div>
</div>
<input type="text" id="user" style="display:none" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user'] : ""); ?>">
<input type="text" id="idSach" style="display:none" value="<?php echo $_REQUEST['idSach']; ?>">
<script>
    $(document).ready(function() {
        $('#favourite').click(function() {
            var user = $('#user').val();
            var idsach = $('#idSach').val();
            if (user === "") {
                alert("bạn phải đăng nhập trước")
                var str = '<input type="checkbox" name="favourite" id="favour" value="1"><label for="favour" id="favourite"></label>'
                $('#add_favourite').html(str)
                location.reload()
            } else {
                $.ajax({
                    url: 'Models/favourite.php',
                    type: 'POST',
                    data: {
                        user: user,
                        idsach: idsach
                    },
                    success: function(data) {
                        $("#favourite").html(data);
                    }
                })
            }
        })
        $('#star1').click(function() {
            var user = $('#user').val();
            var idsach = $('#idSach').val();
            if (user === "") {
                alert("bạn phải đăng nhập trước")
                var str = '<input type="radio" id="star1" name="rating" value="1"><label class="full" for="star1" title="Awesome - 1 stars"></label><input type="radio" id="star2" name="rating" value="2"><label class="full" for="star2" title="Awesome - 2 stars"></label><input type="radio" id="star3" name="rating" value="3"><label class="full" for="star3" title="Awesome - 3 stars"></label><input type="radio" id="star4" name="rating" value="4"><label class="full" for="star4" title="Awesome - 4 stars"></label><input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>';
                $('#rating').html(str)
                location.reload()
            } else {
                $.ajax({
                    url: 'Models/rate.php',
                    type: 'POST',
                    data: {
                        user: user,
                        idsach: idsach,
                        sosao: "1",
                    },
                    success: function(data) {
                        $("#rate_percent").html(data);
                    }
                })
            }
        })
        $('#star2').click(function() {
            var user = $('#user').val();
            var idsach = $('#idSach').val();
            if (user === "")
                alert("bạn phải đăng nhập trước")
            else {
                $.ajax({
                    url: 'Models/rate.php',
                    type: 'POST',
                    data: {
                        user: user,
                        idsach: idsach,
                        sosao: "2",
                    },
                    success: function(data) {
                        $("#rate_percent").html(data);
                    }
                })
            }
        })
        $('#star3').click(function() {
            var user = $('#user').val();
            var idsach = $('#idSach').val();
            if (user === "")
                alert("bạn phải đăng nhập trước")
            else {
                $.ajax({
                    url: 'Models/rate.php',
                    type: 'POST',
                    data: {
                        user: user,
                        idsach: idsach,
                        sosao: "3",
                    },
                    success: function(data) {
                        $("#rate_percent").html(data);
                    }
                })
            }
        })
        $('#star4').click(function() {
            var user = $('#user').val();
            var idsach = $('#idSach').val();
            if (user === "")
                alert("bạn phải đăng nhập trước")
            else {
                $.ajax({
                    url: 'Models/rate.php',
                    type: 'POST',
                    data: {
                        user: user,
                        idsach: idsach,
                        sosao: "4",
                    },
                    success: function(data) {
                        $("#rate_percent").html(data);
                    }
                })
            }
        })
        $('#star5').click(function() {
            var user = $('#user').val();
            var idsach = $('#idSach').val();
            if (user === "")
                alert("bạn phải đăng nhập trước")
            else {
                $.ajax({
                    url: 'Models/rate.php',
                    type: 'POST',
                    data: {
                        user: user,
                        idsach: idsach,
                        sosao: "5",
                    },
                    success: function(data) {
                        $("#rate_percent").html(data);
                    }
                })
            }
        })
    })
</script>