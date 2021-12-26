<?php
$row = array();
$book = loadModel('Book');
$result = $book->get_bookcurrent($_REQUEST['idSach']);
while ($row = $result->fetch_assoc()) {
    $imgSach = $row['imgSach'];
    $Tensach = $row['Tensach'];
    $Tacgia = $row['Tacgia'];
    $nd = $row['tomtatND'];
}

?>
<!-- Phần content -->
<div class="book-detail-container">
    <!-- show infor curent book -->
    <div class="book-img-container">
        <!-- image book -->
        <img src="<?php echo $imgSach; ?>" alt="image book" class="book-img">
    </div>
    <div class="detail-container">
        <h2 class="name"><?php echo $Tensach; ?></h2>
        <p id="writer"><em><?php echo $Tacgia; ?></em></p>
        <form action="#" method="post" class="clear-fix">
            <div id="rating">
                <input type="radio" id="star5" name="rating" value="5">
                <label class="full" for="star5" title="Awesome - 5 stars"></label>

                <input type="radio" id="star4" name="rating" value="4">
                <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                <input type="radio" id="star3" name="rating" value="3">
                <label class="full" for="star3" title="Meh - 3 stars"></label>

                <input type="radio" id="star2" name="rating" value="2">
                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                <input type="radio" id="star1" name="rating" value="1">
                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
            </div>
            <div id="add-favourite">
                <input type="checkbox" name="favourite" id="favour" value="1">
                <label for="favour"></label>
                <!-- <span>Thêm vào yêu thích</span>  -->
            </div>
        </form>
        <div class="intro">
            <p><?php echo nl2br($nd) ?></p>
        </div>
        <div class="btn-read">
            <a href="<?php loadHrefReadBook(); ?>" id="read">Đọc</a>
        </div>
    </div>
</div>
<div class="comment-container">
    <h2 class="category-name">Bình luận</h3>
</div>
<?php loadModule('cmt_book'); ?>
<?php loadModule('new_book'); ?>
