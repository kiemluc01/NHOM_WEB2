<?php
$book = loadModel('book');
$resultBook =  $book->get_new_book($_REQUEST['idSach']);
?>
<div class="col-12">
    <div class="custom-book-info-box">
        <h3 class="[  custom-book-info-heading  custom-book-info-heading--3  ]">Đề xuất khác</h3>
    </div>
    <div class="d-flex">
        <?php while ($newBook = $resultBook->fetch_assoc()) { ?>
            <form class="w-25 p-4" method="get">
                <div class="wrapper-custom-3d-book mt-5">
                    <div class="book">
                        <a href="<?php loadHrefBook($newBook['idSach']); ?>" class="inner-book">
                            <div class="img" style="padding-top: calc(1.07 * 100%)">
                                <img src="<?php echo $newBook['imgSach']; ?>" alt="Book Cover Image">
                            </div>
                            <div class="page"></div>
                            <div class="page page-2"></div>
                            <div class="page page-3"></div>
                            <div class="page page-4"></div>
                            <div class="page page-5"></div>
                            <div class="img final-page" style="padding-top: calc(1.07 * 100%)">
                                <img src="<?php echo $newBook['imgSach']; ?>" alt="Book Cover Image">
                            </div>
                        </a>
                    </div>
                    <div class="mt-3 text-center">
                        <em><?php echo $newBook['Tacgia']; ?></em>
                    </div>
                    <div class="d-flex mt-3 justify-content-around">
                        <div>
                            <i class="fas fa-eye"></i> <?php echo $newBook["Luotxem"]; ?>
                        </div>
                        <div>
                            <i class="fas fa-comments"></i> <?php echo $newBook["Feedback"]; ?>
                        </div>
                        <div>
                            <i class="fab fa-gratipay"></i> <?php echo $newBook["Favorite"]; ?>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</div>