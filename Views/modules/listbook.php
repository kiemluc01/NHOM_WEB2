<?php
$book = loadModel('book');
$resultBook =  $book->Book_category($_SESSION['idDM']);
if ($resultBook->num_rows > 0) { //_n mysqlum_rows
    $d = 0; ?>
    <table id="listbook">
        <tr>
            <h2 style="background-color: rgb(190, 225, 253); line-height: 50px; color: #000000; padding-left:1%;"><?php echo $_SESSION['rowDM']['Tendanhmuc']; ?></h2>
            <?php

            while ($rowBook = $resultBook->fetch_assoc()) {
                for ($i = 1; $i <= 4; $i++) {
                    $d++;
                    $idSach = $rowBook['idSach']; ?>
                    <td>

                        <form method="GET" style="padding-left:50px;" method="get">
                            <table id="container_listbook">
                                <tr>
                                    <td id="book_container">
                                        <center><a href="<?php loadHrefBook($rowBook['idSach']); ?>" class="listbook"><img id="book" src="<?php echo $rowBook['imgSach']; ?>" alt="image"></a></center>
                                    </td>
                                </tr>
                                <tr>
                                    <th id="bookname">
                                        <center><?php echo $rowBook["Tensach"]; ?></center>
                                    </th>
                                </tr>
                                <tr>
                                    <td id="writer">
                                        <center><?php echo $rowBook["Tacgia"]; ?></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                            <div id="details_container">
                                                <div class="details_container">
                                                    <a href=""><img src="Public/images/icon_view.png" alt="" class="details_container"></a>
                                                    <figcaption><?php echo $rowBook["Luotxem"]; ?></figcaption>
                                                </div>
                                                <div class="details_container">
                                                    <img src="Public/images/icon_cmt.png" alt="" class="details_container">
                                                    <figcaption><?php echo $rowBook["Feedback"]; ?></figcaption>
                                                </div>
                                                <div class="details_container">
                                                    <img src="Public/images/icon_favorite_false.png" alt="" class="details_container" id="favorite">
                                                    <figcaption><?php echo $rowBook["Favorite"]; ?></figcaption>
                                                </div>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                    <?php if ($d % 5 == 0)
                        echo '</tr>'; ?>

            <?php  }
            }
            if ($d % 5 != 0)
                echo '</tr>'; ?>

    </table>
<?php } ?>