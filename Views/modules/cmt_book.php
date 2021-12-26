<?php
$book = loadModel('Book');
$cmt_book = $book->get_cmt($_REQUEST['idSach']);
?>
<div class="make-comment">
    <h4>Cảm nhận của bạn</h4>   
    <form action="#">
        <textarea name="Noidung" cols="30" rows="10" placeholder="Cảm nhận của bạn ..."></textarea>
        <input type="submit" value="Gửi">
    </form>
</div>
<div class="cmt_book">
    <?php
    if (true) {
        while ($cmt_row = $cmt_book->fetch_assoc()) { ?>
            <div class="cmt_member">
                <div class="infor_Member">
                    <img src="<?php echo $cmt_row['IMG'] ?>" alt="Avt" class="avt">
                    <div class="name_Member_time">
                        <p class="Member_name" class="text"><?php echo $cmt_row['email'] ?></p>
                        <p class="time" class="text"><?php echo $cmt_row['Thoigian'] ?></p>
                    </div>
                </div>
                <div class="cmt_content">
                    <p class="cmt_content" class="text"><?php echo $cmt_row['Noidung'] ?></p>
                </div>
            </div>
    <?php }
    } ?>
</div>