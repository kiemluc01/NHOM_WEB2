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
<div id="current_book">
    <!-- show infor curent book -->
    <div id="img_book">
        <!-- image book -->
        <img src="<?php echo $imgSach; ?>" alt="image book" class="img_book">
    </div>
    <form id="content_book">
        <!-- content book -->
        <div id="main_details">
            <div id="main_details1">
                <h2 id="bookname"><?php echo $Tensach; ?></h2>
                <p id="writer"><?php echo $Tacgia; ?></p>
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
                <!-- name book, writer and rate number star -->
            </div>
            <div id="main_details2">
                <img src="Public/images/icon_favorite_false.jpg" alt="" class="details_container" id="favorite">
                <figcaption>Thêm vào yêu thích</figcaption>
                <!-- add in Favorite labrary -->
            </div>
        </div>
        <hr>
        <div id="book_introduction">
            <!-- introduct for curent book-->
            <p id="nd"><?php echo $nd ?></p>
            <!-- introduct for publishing company -->
            <hr>

        </div>
        <a href="<?php loadHrefReadBook(); ?>" id="read">Đọc</a>
    </form>
</div>
<?php loadModule('new_book'); ?>
<center>
    <h3 id="title_cmt" style="background-color: #FFF;">Bài đánh giá của cộng đồng</h3>
</center>
<?php loadModule('cmt_book'); ?>