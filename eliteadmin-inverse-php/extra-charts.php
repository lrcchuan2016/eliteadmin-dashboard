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
    <link href="../plugins/bower_components/css-chart/css-chart.css" rel="stylesheet">
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
                    <h4 class="page-title">Extra chart</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">Easy Pie Chart</h3>
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-1" data-percent="75"> <span class="percent">8/100</span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="easy-pie-chart-3 chart pie-chart" data-percent="25"> <span>25.00 <br>
                  <small class="text-muted">/100mb</small></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">Easy Pie line Chart</h3>
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-4" data-percent="75"> <span class="percent">8/100</span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-5" data-percent="75"> <span class="percent">75</span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="easy-pie-chart-6 chart pie-chart" data-percent="25"> <span>25.00 <br>
                  <small class="text-muted">/100mb</small></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">Easy Pie Avtar Chart</h3>
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-1" data-percent="75"> <span><img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle"/></span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-2" data-percent="75"> <span><img src="../plugins/images/users/sonu.jpg" alt="user"  class="img-circle"/></span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="easy-pie-chart-3 chart" data-percent="25"> <span><img src="../plugins/images/users/ritesh.jpg" alt="user" class="img-circle"/></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">Easy Pie Avtar Chart</h3>
                        <div class="row text-center">
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-4" data-percent="75"> <span><img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle"/></span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chart easy-pie-chart-5" data-percent="75"> <span><img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"/></span> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="easy-pie-chart-6 chart" data-percent="25"> <span><img src="../plugins/images/users/ritesh.jpg" alt="user"  class="img-circle"/></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Css Charts</h3>
                        <p class="text-muted m-t-5 m-b-30">Just add class <code>.css-bar</code> and data lable </p>
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div data-label="10%" class="css-bar css-bar-10 css-bar-lg css-bar-default"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="20%" class="css-bar css-bar-20 css-bar-lg"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="30%" class="css-bar css-bar-30 css-bar-lg css-bar-success"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="40%" class="css-bar css-bar-40 css-bar-lg css-bar-warning"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">All Size</h3>
                        <p class="text-muted m-b-30"><code>.css-bar-lg</code>, <code>.css-bar</code>, <code>.css-bar-sm</code>, <code>.css-bar-xs</code></p>
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div data-label="10%" class="css-bar css-bar-10 css-bar-lg css-bar-default"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="20%" class="css-bar css-bar-20 css-bar"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="30%" class="css-bar css-bar-30 css-bar-sm css-bar-success"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="40%" class="css-bar css-bar-40 css-bar-xs css-bar-warning"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title">Chart With image </h3>
                        <p class="text-muted m-b-30">put image between div</p>
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div data-label="10%" class="css-bar css-bar-10 css-bar-lg css-bar-default"><img src="../plugins/images/users/genu.jpg" alt="User"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="20%" class="css-bar css-bar-20 css-bar-lg"><img src="../plugins/images/users/sonu.jpg" alt="User"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="30%" class="css-bar css-bar-30 css-bar-lg css-bar-success"><img src="../plugins/images/users/govinda.jpg" alt="User"></div>
                            </div>
                            <div class="col-md-3">
                                <div data-label="40%" class="css-bar css-bar-40 css-bar-lg css-bar-warning"><img src="../plugins/images/users/ritesh.jpg" alt="User"></div>
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
    <!-- EASY PIE CHART JS -->
    <script src="../plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="../plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>