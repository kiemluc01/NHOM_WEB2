<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LoadTirtle(); ?></title>
    <link rel="icon" href="admin/Public\images\logo_icon_2.png">
    <link rel="stylesheet" href="Public/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Public/css/book.css">
    <link rel="stylesheet" href="Public/css/main.css">
    <link rel="stylesheet" href="Public\css\listcategory-dropdown.css">
    <link rel="stylesheet" href="Public\css\wrapper-custom-3d-book.css">
    <link rel="stylesheet" href="Public\css\custom-book-info.css">
    <link rel="stylesheet" href="Public/css/footer.css">
    <link rel="stylesheet" href="Public\css\custom-comment-threads.css">
    <link rel="stylesheet" href="Public\css\custom.css">
    <link rel="stylesheet" href="Public\css\demoStyle3.css">
    <link rel="stylesheet" href="Public\css\custom-profile.css">
    <link rel="stylesheet" href="Public\css\custom-livesearch.css">
    <!-- <link rel="stylesheet" href="Public/css/register.css"> -->
    <link rel="stylesheet" href="Public/fontawesome/css/all.css">
    <link rel="stylesheet" href="Public/css/icon.css">
    <link rel="stylesheet" href="Public/css/rating.css">
    <link rel="stylesheet" href="Public/css/dialog.css">
    <link rel="stylesheet" href="Public/css/member.css">
    <!-- <link rel="stylesheet" href="Public/css/fontfamily.css"> -->

    <link rel="icon" href="images/favicon.ico" type="image/ico" />
</head>

<body>
    <header>
        <?php if (isset($_REQUEST['option'])) {
            if ($_REQUEST['option'] == 'login')
                isset($_SESSION['user']);
        } ?>
        <?php loadMenu(); ?>
    </header>

    <main>
        <?php
        if (isset($_REQUEST['find']))
            loadModule('result_find');
        else
            loadComponent(); ?>
    </main>

    <footer>
        <?php loadModule('footer'); ?>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Public\dist\js\bootstrap.bundle.min.js"></script>
    <script src='https://tympanus.net/Development/ElasticSVGElements/js/classie.js'></script>
    <script src='https://tympanus.net/Development/ElasticSVGElements/js/snap.svg-min.js'></script>
    <script src="Public\javascript\custom.js"></script>
    <script src="Public\javascript\form-validation.js"></script>
    <script src="Public\javascript\searchBook.js"></script>
    <script src="Public\javascript\pagesDemo3.bundle.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.8/emojionearea.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.2.8/emojionearea.min.js"></script>
    <script src="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.js"></script>
   <script>
        (function(m, e, t, r, i, k, a) {
    m[i] = m[i] || function() {
    (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(64530565, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
</body>

</html>