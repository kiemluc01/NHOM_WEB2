<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo LoadTirtle(); ?></title>
    <link rel="icon" href="Public\images\logo_icon_2.png">
    <!-- Bootstrap -->
    <!-- thong ke -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="Public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="Public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="Public/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Public/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="Public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="Public/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <!-- thong ke -->
    <link href="Public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="Public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="Public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Public/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="Public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="Public/build/css/custom.min.css" rel="stylesheet">
    <link href="Public/build/css/custom.css" rel="stylesheet">
    <link href="Public/css/admin.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- Font Awesome -->
    <!-- bootstrap-wysiwyg -->
    <link href="Public/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="Public/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="Public/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="Public/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="Public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="Public/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="Public/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="Public/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="Public/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="Public/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="Public/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="Public/build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- top navigation -->
            <?php
            loadModule("slidebar")
            ?>
            <!-- /top navigation -->
            <?php
            loadModule("header_admin")
            ?>

            <!-- page content -->
            <div class="right_col custom-scroll" role="main">
                <?php loadComponent()
                ?>
            </div>
            <!-- /page content -->
            <?php
            loadModule("footer_admin")
            ?>
        </div>
    </div>
</body>

</html> <!-- footer content -->
<!-- /footer content -->

<!-- jQuery -->
<script src="Public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="Public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="Public/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="Public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="Public/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="Public/vendors/moment/min/moment.min.js"></script>
<script src="Public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="Public/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="Public/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="Public/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="Public/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="Public/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="Public/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="Public/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="Public/vendors/autosize/dist/autosize.min.js"></script>
<script src="Public/ckeditor/ckeditor.js"></script>
<!-- jQuery autocomplete -->
<script src="Public/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="Public/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="Public/build/js/custom.min.js"></script>
<script src="Public/build/js/select_category.js"></script>
<script src="Public/js/upload_image.js"></script>
<script src="Public/js/upload_banner.js"></script>
<script src="Public/js/find_book.js"></script>
<!-- Bootstrap -->
<script src="Public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="Public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="Public/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="Public/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="Public/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="Public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="Public/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="Public/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="Public/vendors/Flot/jquery.flot.js"></script>
<script src="Public/vendors/Flot/jquery.flot.pie.js"></script>
<script src="Public/vendors/Flot/jquery.flot.time.js"></script>
<script src="Public/vendors/Flot/jquery.flot.stack.js"></script>
<script src="Public/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="Public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="Public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="Public/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="Public/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="Public/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="Public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="Public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="Public/vendors/moment/min/moment.min.js"></script>
<script src="Public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="Public/build/js/custom.min.js"></script>

<script src="Public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="Public/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="Public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="Public/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="Public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="Public/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="Public/vendors/moment/min/moment.min.js"></script>
<script src="Public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="Public/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="Public/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="Public/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="Public/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="Public/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="Public/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="Public/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="Public/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="Public/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="Public/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- <script src="Public\dist\js\bootstrap.bundle.min.js"></script> -->
<!-- crp thống kê -->
<!-- jQuery -->
<script src="Public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="Public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="Public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="Public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="Public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="Public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="Public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Public/plugins/moment/moment.min.js"></script>
<script src="Public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->

<!-- overlayScrollbars -->
<script src="Public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Public/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Public/dist/js/pages/dashboard.js"></script>
<!-- crp thống kê -->
<!-- jQuery -->
<script src="Public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    CKEDITOR.replace('tomtatND');
    CKEDITOR.replace('noidung');
</script>