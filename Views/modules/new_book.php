<?php
$book = loadModel('book');
$resultBook =  $book->get_new_book($_REQUEST['idSach']);
?>
<div class="list-book-container-2">
    <h2 class="category-name">Đề xuất khác</h3>
        <div class="list-item-container">
            <?php while ($newBook = $resultBook->fetch_assoc()) { ?>
                <div class="book-item">
                    <form method="get">
                        <div class="book-container">
                            <div class="book-cover-container">
                                <div class="book-cover">
                                    <a href="<?php loadHrefBook($newBook['idSach']); ?>" class="listbook">
                                        <div class="front">
                                            <div class="cover">
                                                <img src="<?php echo $newBook['imgSach']; ?>" alt="ảnh của sách" id="book" class="book-cover-img">
                                            </div>
                                        </div>
                                        <div class="left-side"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="book-title">
                                <cite><?php echo $newBook['Tensach']; ?></cite>
                            </div> -->
                            <div class="book-author">
                                <em><?php echo $newBook['Tacgia']; ?></em>
                            </div>
                            <div class="book-view">
                                <div class="book-view-detail">
                                    <i class="fas fa-eye"></i> <?php echo $newBook["Luotxem"]; ?>
                                </div>
                                <div class="book-view-detail">
                                    <i class="fas fa-comments"></i> <?php echo $newBook["Feedback"]; ?>
                                </div>
                                <div class="book-view-detail">
                                    <i class="fab fa-gratipay"></i> <?php echo $newBook["Favorite"]; ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
</div>