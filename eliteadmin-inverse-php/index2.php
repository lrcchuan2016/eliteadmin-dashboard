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
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- vector map CSS -->
    <link href="../plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="../plugins/bower_components/css-chart/css-chart.css" rel="stylesheet">
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
                    <h4 class="page-title">Dashboard 2</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small> Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% High then last month</small>Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small>Site Traffic</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline10"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Site Visits</h3>
                            <div class="row">
                                <div class="col-md-12 col-lg-8">
                                    <div id="world-map-marker" style="height: 490px;"></div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <ul class="country-state slimscrollcountry">
                                        <li>
                                            <h2>6350</h2> <small>From India</small>
                                            <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>3250</h2> <small>From UAE</small>
                                            <div class="pull-right">98% <i class="fa fa-level-up text-success"></i></div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:98%;"> <span class="sr-only">98% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>1250</h2> <small>From Australia</small>
                                            <div class="pull-right">75% <i class="fa fa-level-down text-danger"></i></div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>1350</h2> <small>From USA</small>
                                            <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2>350</h2> <small>From UK</small>
                                            <div class="pull-right">68% <i class="fa fa-level-down text-danger"></i></div>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:68%;"> <span class="sr-only">48% Complete</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                            <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span>
                                                <br/>
                                                <h4>New Users Visits</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                            <div class="chart easy-pie-chart-1" data-percent="65"> <span class="percent">75</span>
                                                <br/>
                                                <h4>Returning Users</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                            <div class="chart easy-pie-chart-3" data-percent="25"> <span class="percent">75</span>
                                                <br/>
                                                <h4>Bounce Rate</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="white-box">
                            <h3 class="box-title">Browser Stats</h3>
                            <ul class="basic-list">
                                <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                                <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                                <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                                <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="white-box">
                            <h3 class="box-title">CPU LOAD</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Usage</h6> <b>60GB</b></div>
                                <div class="stat-item">
                                    <h6>Space</h6> <b>320 GB</b></div>
                                <div class="stat-item">
                                    <h6>CPU</h6> <b>50%</b></div>
                            </div>
                            <div style="height: 280px;">
                                <div id="placeholder" class="demo-placeholder"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="white-box">
                            <div class="user-bg"> <img src="../plugins/images/large/img1.jpg" alt="user" style="100%">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../plugins/images/users/genu.jpg"></a>
                                        <h4 class="text-white">User Name</h4>
                                        <h5 class="text-white">info@myadmin.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <p class="text-purple"><i class="ti-facebook"></i></p>
                                        <h1>258</h1>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <p class="text-blue"><i class="ti-twitter"></i></p>
                                        <h1>125</h1>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <p class="text-danger"><i class="ti-dribbble"></i></p>
                                        <h1>556</h1>
                                    </div>
                                    <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                                        <div class="stat-item">
                                            <h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <!-- /.row -->
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
    <!-- Flot Charts JavaScript -->
    <script src="../plugins/bower_components/flot/jquery.flot.js"></script>
    <script src="../plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!-- google maps api -->
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Sparkline charts -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- EASY PIE CHART JS -->
    <script src="../plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="../plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard2.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>