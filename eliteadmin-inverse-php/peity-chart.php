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
    <!-- Morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
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
                    <h4 class="page-title">Peity Chart Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="white-box">
                        <h3>Pie Chart</h3>
                        <p class="text-muted m-b-30">Add code in span <code> class="pie"</code> plus for colors <code>data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'</code></p>
                        <div class="row">
                            <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'>1/5</span>
                                <div>Data : 1/5</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#6164c1", "#f2f2f2"]}'>226/360</span>
                                <div>Data : 226/360</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#f96262", "#f2f2f2"]}'>0.52/1.561</span>
                                <div>Data : 0.52/1.561</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#99d683", "#f2f2f2"]}'>1,4</span>
                                <div>Data : 1,4</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#ffca4a", "#f2f2f2"]}'>226,134</span>
                                <div>Data : 226,134</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#4c5667", "#f2f2f2"]}'>0.52,1.041</span>
                                <div>Data : 0.52, 1.041</div>
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
                        <h3>Donut Chart</h3>
                        <p class="text-muted m-b-30">Just add in span<code> class="donut"</code></p>
                        <div class="row">
                            <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'>1/5</span>
                                <div>Data : 1/5</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#6164c1", "#f2f2f2"]}'>226/360</span>
                                <div>Data : 226/360</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#f96262", "#f2f2f2"], "innerRadius": 16, "radius": 32 }'>0.52/1.561</span>
                                <div>Data : 0.52/1.561</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#99d683", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'>1,4</span>
                                <div>Data : 1,4</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#ffca4a", "#f2f2f2"], "innerRadius": 23, "radius": 32 }'>226,134</span>
                                <div>Data : 226,134</div>
                            </div>
                            <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#4c5667", "#f2f2f2"], "innerRadius": 8, "radius": 32 }'>0.52,1.041</span>
                                <div>Data : 0.52, 1.041</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3> Bar Chart</h3>
                        <p class="text-muted m-b-30">Add class in span<code> peity-bar</code></p>
                        <div class="row">
                            <div class="col-sm-4 col-xs-6"><span class="peity-bar" data-peity='{ "fill": ["#6164c1", "#13dafe"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                            <div class="col-sm-4 col-xs-6"><span class="peity-bar" data-peity='{ "fill": ["#f96262", "#f2f2f2"]}' data-width="100%" data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span></div>
                            <div class="col-sm-4 col-xs-6"><span class="peity-bar" data-peity='{ "fill": ["#4c5667", "#99d683"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3>Line Chart</h3>
                        <p class="text-muted m-b-30">Add class in span<code> peity-line</code></p>
                        <div class="row">
                            <div class="col-sm-4 col-xs-6"><span class="peity-line" data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
                            <div class="col-sm-4 col-xs-6"><span class="peity-line" data-width="100%" data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span></div>
                            <div class="col-sm-4 col-xs-6"><span class="peity-line" data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span></div>
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
    <!-- jQuery peity -->
    <script src="../plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="../plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>