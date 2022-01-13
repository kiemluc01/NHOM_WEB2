<?php
$book = loadModel('Book');

if (isset($_REQUEST['Noidung'])) {
    $book->cmt($_REQUEST['Noidung'], $_REQUEST['idSach']);
}
$cmt_book = $book->get_cmt($_REQUEST['idSach']);
?>
<div class="col-md-7 pb-4 pe-5">
    <h4>Cảm nhận của bạn</h4>
    <?php
    if (true) {
        while ($cmt_row = $cmt_book->fetch_assoc()) {
            $dateCmt = strtotime($cmt_row['Thoigian']);
            $parts = getdate($dateCmt); ?>
            <div class="custom-card p-3 mt-4 text-justify d-flex">
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
    <?php }
    } ?>
</div>
<div class="col-md-5 mt-4">
    <h4>Cho chúng tôi biết cảm nhận của bạn</h4>
    <form action="#" method="post">
        <div class="mb-3 mt-3">
            <textarea name="Noidung" cols="30" rows="10" class="custom-card p-3 w-100" placeholder="Cảm nhận của bạn ..."></textarea>
        </div>
        <div class="mb-3 mt-3 text-end">
            <button type="submit" class="btn btn-lg text-light btn-info fw-bold border-info bg-info">Gửi</button>
        </div>
    </form>
</div>