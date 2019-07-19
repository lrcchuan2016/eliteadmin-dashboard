<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Form Mask</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Form Addons</h3>
                        <p class="text-muted m-b-30 font-13"> Use the button classes on an <code>data-mask</code> to the input element.</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control"> <span class="font-13 text-muted">(999) 999-9999</span> </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"> <span class="font-13 text-muted">dd/mm/yyyy</span> </div>
                                    <div class="form-group">
                                        <label>SSN field 1</label>
                                        <input type="text" placeholder="" data-mask="999-99-9999" class="form-control"> <span class="font-13 text-muted">e.g "999-99-9999"</span> </div>
                                    <div class="form-group">
                                        <label>Phone field + ext.</label>
                                        <input type="text" placeholder="" data-mask="+40 999 999 999" class="form-control"> <span class="font-13 text-muted">+40 999 999 999</span> </div>
                                    <div class="form-group">
                                        <label>Product Key</label>
                                        <input type="text" placeholder="" data-mask="a*-999-a999" class="form-control"> <span class="font-13 text-muted">e.g a*-999-a999</span> </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="#">
                                    <div class="form-group">
                                        <label>Currency</label>
                                        <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control"> <span class="font-13 text-muted">$ 999,999,999.99</span> </div>
                                    <div class="form-group">
                                        <label>Date 2</label>
                                        <input type="text" placeholder="" data-mask="99-99-9999" class="form-control"> <span class="font-13 text-muted">dd-mm-yyyy</span> </div>
                                    <div class="form-group">
                                        <label>Eye Script</label>
                                        <input type="text" placeholder="" data-mask="~9.99 ~9.99 999" class="form-control"> <span class="font-13 text-muted">~9.99 ~9.99 999</span> </div>
                                    <div class="form-group">
                                        <label>Percent</label>
                                        <input type="text" placeholder="" data-mask="99%" class="form-control"> <span class="font-13 text-muted">e.g "99%"</span> </div>
                                    <div class="form-group m-b-0">
                                        <label>Pc Ip</label>
                                        <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control"> <span class="font-13 text-muted">e.g "999.999.999.9999"</span> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/mask.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>