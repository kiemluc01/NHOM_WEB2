<?php
$str = $_REQUEST['find'];

$book = loadModel('book');
$resultBook =  $book->Find_book($str);
if ($resultBook->num_rows > 0) { ?>
    <h2 id="sticky-bar" class="py-3 ps-5 bg-info rounded-bottom"><?php echo 'kết quả tìm kiếm cho "' . $str . '"'; ?></h2>
    <div class="clear-fix list-book-container">
        <div class="list-item-container">
            <?php
            while ($rowBook = $resultBook->fetch_assoc()) {
                $idSach = $rowBook['idSach']; ?>
                <div class="book-item">
                    <form method="get">
                        <div class="book-container">
                            <!-- note: remember to design the cover of the book -->
                            <div class="book-cover-container">
                                <div class="book-cover">
                                    <a href="<?php loadHrefBook($rowBook['idSach']); ?>" class="listbook">
                                        <div class="front">
                                            <div class="cover">
                                                <img class="book-cover-img" src="<?php echo $rowBook['imgSach']; ?>" alt="image">
                                            </div>
                                        </div>
                                        <div class="left-side"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="book-title">
                                <cite><?php echo $rowBook["Tensach"]; ?></cite>
                            </div> -->
                            <div class="book-author">
                                <em><?php echo $rowBook["Tacgia"]; ?></em>
                            </div>
                            <div class="book-view">
                                <div class="book-view-detail">
                                    <i class="fas fa-eye"></i> <?php echo $rowBook["Luotxem"]; ?>
                                </div>
                                <div class="book-view-detail">
                                    <i class="fas fa-comments"></i> <?php echo $rowBook["Feedback"]; ?>
                                </div>
                                <div class="book-view-detail">
                                    <i class="fab fa-gratipay"></i> <?php echo $rowBook["Favorite"]; ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>