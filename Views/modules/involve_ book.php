<?php
$book = loadModel('book');
$resultBook =  $book->get_involve_book($_REQUEST['find']);
?>
<h4 class="[  custom-book-info-heading  custom-book-info-heading--4  ]">Đề xuất khác</h4>
<div class="d-flex">
    <?php while ($newBook = $resultBook->fetch_assoc()) { ?>
        <form class="w-25 p-4" method="get">
            <div class="wrapper-custom-3d-book mt-5">
                <div class="book">
                    <a href="<?php loadHrefBook($newBook['idSach']); ?>" class="inner-book">
                        <div class="img" style="padding-top: calc(1.07 * 100%)">
                            <img src="<?php if (substr($newBook['imgSach'], 0, 4) == "http") echo $newBook['imgSach'];
                                        else echo "admin/" . $newBook['imgSach']; ?>" alt="Book Cover Image">
                        </div>
                        <div class="page"></div>
                        <div class="page page-2"></div>
                        <div class="page page-3"></div>
                        <div class="page page-4"></div>
                        <div class="page page-5"></div>
                        <div class="img final-page" style="padding-top: calc(1.07 * 100%)">
                            <img src="<?php if (substr($newBook['imgSach'], 0, 4) == "http") echo $newBook['imgSach'];
                                        else echo "admin/" . $newBook['imgSach']; ?>" alt="Book Cover Image">
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