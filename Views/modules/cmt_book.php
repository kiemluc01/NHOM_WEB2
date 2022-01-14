<?php
$book = loadModel('Book');

if (isset($_REQUEST['Noidung'])) {
    //$book->cmt($_REQUEST['Noidung'], $_REQUEST['idSach']);
}
$cmt_book = $book->get_cmt($_REQUEST['idSach']);
?>
<div class="col-md-7 pb-4 pe-5 cmt" id="cmt">
    <h4 class="[  custom-book-info-heading  custom-book-info-heading--4  ]">Cảm nhận bạn đọc</h4>
    <div class="custom-max-box mt-3 scroll-height-50">
        <?php
        if (true) {
            while ($cmt_row = $cmt_book->fetch_assoc()) {
                $dateCmt = strtotime($cmt_row['Thoigian']);
                $parts = getdate($dateCmt); ?>
                <div class="card mb-3 text-justify">
                    <div class="card-body d-flex">
                        <div class="me-3">
                            <img src="<?php echo $cmt_row['ImgAvatar'] ?>" alt="Avt" class="rounded-3" width="50" height="50">
                        </div>
                        <div class="flex-grow-1">
                            <div>
                                <span class="float-end"><?php echo $parts['mday'] . "-" . $parts['mon'] . "-" . $parts['year']; ?></span>
                                <h4><?php $member = loadModel('Member');
                                    echo $member->getName($cmt_row['username']); ?></h4>
                            </div>
                            <p class="mt-3"><?php echo $cmt_row['Noidung'] ?></p>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</div>
<div class="col-md-5">
    <h4 class="[  custom-book-info-heading  custom-book-info-heading--4  ]">Cho chúng tôi biết cảm nhận của bạn</h4>
    <!-- <form action="" method="post"> -->
    <div class="custom-max-box mt-3">
        <div class="mb-3">
            <textarea name="Noidung" id="noidung" cols="30" rows="10" class="card p-3 w-100" placeholder="Cảm nhận của bạn ..."></textarea>
        </div>
        <div class="mt-3 text-end">
            <button type="submit" onsubmit="return false" id="push" class="btn btn-lg text-light btn-info fw-bold border-info bg-info" onsubmit="return false">Gửi</button>
        </div>
    </div>
    <!-- </form> -->
</div>
<input type="text" id="user" style="display:none" value="<?php echo (isset($_SESSION['user']) ? $_SESSION['user'] : ""); ?>">
<input type="text" id="idSach" style="display:none" value="<?php echo $_REQUEST['idSach']; ?>">
<script src=" //ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    var content = $('#noidung').val();
    $(document).ready(function() {
        $('#push').click(function() {
            var content = $('#noidung').val();
            var user = $('#user').val();
            var idsach = $('#idSach').val();
            if (user === "")
                alert("Bạn phải đăng nhập trước!")
            else
            if (content === "")
                alert("Bạn chưa nhập nội dung!")
            else {
                $.ajax({
                    url: "Models/getCmt.php",
                    type: "POST",
                    data: {
                        noidung: content,
                        user: user,
                        idSach: idsach
                    },
                    beforeSend: function() {
                        $("#cmt").html("<span>Đang đăng ...</span>");
                    },
                    success: function(data) {
                        $("#cmt").html(data);
                        $('#noidung').val() = ""
                    }
                })
            }
        })
    })
</script>