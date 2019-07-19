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
    <!--Range slider CSS -->
    <link href="../plugins/bower_components/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../plugins/bower_components/ion-rangeslider/css/ion.rangeSlider.skinModern.css" rel="stylesheet">
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
                    <h4 class="page-title">ION Range Slider</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <!-- .row -->
                        <div class="row">
                            <!-- .col-lg-12 -->
                            <div class="col-md-12">
                                <h3 class="box-title">Start without params</h3>
                                <div id="range_01"></div>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="col-md-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- .col-lg-12 -->
                            <div class="col-md-12">
                                <h3 class="box-title">Set min value, max value and start point</h3>
                                <div id="range_02"></div>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="col-md-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- .col-lg-12 -->
                            <div class="col-md-12">
                                <h3 class="box-title">Set type to double and specify range, also showing grid and adding prefix "$"</h3>
                                <div id="range_03"></div>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="col-md-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- .col-lg-12 -->
                            <div class="col-md-12">
                                <h3 class="box-title">Set up range with negative values</h3>
                                <div id="range_04"></div>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="col-md-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- .col-lg-12 -->
                            <div class="col-md-12">
                                <h3 class="box-title">Whant to show that max number is not the biggest one?</h3>
                                <div id="range_16"></div>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="col-md-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- .col-lg-12 -->
                            <div class="col-md-12">
                                <h3 class="box-title">Remove double decoration</h3>
                                <div id="range_18"></div>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="col-md-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- .col-lg-12 -->
                            <div class="col-md-12">
                                <h3 class="box-title">Visual details</h3>
                                <div id="range_22"></div>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- .row -->
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
    <!-- Range slider  -->
    <script src="../plugins/bower_components/ion-rangeslider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="../plugins/bower_components/ion-rangeslider/js/ion-rangeSlider/ion.rangeSlider-init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>