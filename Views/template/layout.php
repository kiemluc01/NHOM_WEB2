<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LoadTirtle(); ?></title>
    <link rel="icon" href="Public\images\logo_icon_2.png">
    <!-- <link rel="stylesheet" href="Public/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="Public/css/main.css">
    <link rel="stylesheet" href="Public/css/menu_home.css">
    <link rel="stylesheet" href="Public/css/menu_login.css">
    <link rel="stylesheet" href="Public/css/menu_main.css">
    <link rel="stylesheet" href="Public/css/footer.css">
    <link rel="stylesheet" href="Public/css/details_book.css">
    <link rel="stylesheet" href="Public/css/content.css">
    <link rel="stylesheet" href="Public/css/animateLeft.css">
    <link rel="stylesheet" href="Public/css/animateRight.css">
    <link rel="stylesheet" href="Public/css/book.css">
    <link rel="stylesheet" href="Public/css/new_book.css">
    <link rel="stylesheet" href="Public/css/cmt_book.css">
    <link rel="stylesheet" href="Public/css/login.css">
    <link rel="stylesheet" href="Public/css/register.css">
    <link rel="stylesheet" href="Public/fontawesome/css/all.css">
    <link rel="stylesheet" href="Public/css/icon.css">
    <link rel="stylesheet" href="Public/css/rating.css">
    <link rel="stylesheet" href="Public/css/register.css">
    <link rel="stylesheet" href="Public/css/readbook.css">
    <link rel="stylesheet" href="Public/css/fontfamily.css">

    <!-- bootrap collapse -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

</head>

<body>
    <!-- load menu -->
    <?php loadMenu();
    ?>
    <div class="site-content">
        <!-- load component -->
        <?php loadComponent();    ?>
    </div>
    <?php loadModule('footer');     ?>
    <script src="Public\javascript\sticky-bar.js"></script>
    <script src="Public\javascript\banner-slide-show.js"></script>
    <script src="Public\javascript\searchBook.js"></script>
    <script src="Public\javascript\somepiece.js"></script>
    <!-- <script src="Public\dist\js\bootstrap.bundle.min.js"></script> -->
</body>

</html>