<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LoadTirtle(); ?></title>
    <link rel="icon" href="Public\images\logo_icon_2.png">
    <link rel="stylesheet" href="Public/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Public/css/book.css">
    <link rel="stylesheet" href="Public/css/main.css">
    <link rel="stylesheet" href="Public\css\listcategory-dropdown.css">
    <link rel="stylesheet" href="Public\css\wrapper-custom-3d-book.css">
    <link rel="stylesheet" href="Public\css\custom-book-info.css">
    <link rel="stylesheet" href="Public/css/footer.css">
    <!-- <link rel="stylesheet" href="Public/css/details_book.css"> -->
    <!-- <link rel="stylesheet" href="Public/css/content.css"> -->
    <link rel="stylesheet" href="Public\css\custom.css">
    <!-- <link rel="stylesheet" href="Public/css/new_book.css"> -->
    <!-- <link rel="stylesheet" href="Public/css/cmt_book.css"> -->
    <!-- <link rel="stylesheet" href="Public/css/login.css"> -->
    <!-- <link rel="stylesheet" href="Public/css/register.css"> -->
    <link rel="stylesheet" href="Public/fontawesome/css/all.css">
    <link rel="stylesheet" href="Public/css/icon.css">
    <link rel="stylesheet" href="Public/css/rating.css">
    <!-- <link rel="stylesheet" href="Public/css/register.css"> -->
    <!-- <link rel="stylesheet" href="Public/css/readbook.css"> -->
    <!-- <link rel="stylesheet" href="Public/css/fontfamily.css"> -->
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
</head>

<body>
    <header>
        <?php loadMenu(); ?>
    </header>

    <main>
        <?php loadComponent(); ?>
    </main>

    <footer>
        <?php loadModule('footer'); ?>
    </footer>
    <script src="Public\dist\js\bootstrap.bundle.min.js"></script>
    <script src='https://tympanus.net/Development/ElasticSVGElements/js/classie.js'></script>
    <script src='https://tympanus.net/Development/ElasticSVGElements/js/snap.svg-min.js'></script>
    <script src="Public\javascript\listcategory-dropdown.js"></script>
    <script src="Public\javascript\form-validation.js"></script>
    <script src="Public\javascript\searchBook.js"></script>
    <!-- <script src="Public\javascript\somepiece.js"></script> -->

</body>

</html>