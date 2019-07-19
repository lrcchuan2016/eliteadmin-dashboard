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
                    <h4 class="page-title">Pricing page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row pricing-plan">
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box">
                                    <div class="pricing-body b-l">
                                        <div class="pricing-header">
                                            <h4 class="text-center">Silver</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>24</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 50GB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box b-l">
                                    <div class="pricing-body">
                                        <div class="pricing-header">
                                            <h4 class="text-center">Gold</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>34</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 5 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 80GB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box featured-plan">
                                    <div class="pricing-body">
                                        <div class="pricing-header">
                                            <h4 class="price-lable text-white bg-warning"> Popular</h4>
                                            <h4 class="text-center">Platinum</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>45</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 10 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 120GB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-lg btn-info waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box">
                                    <div class="pricing-body b-r">
                                        <div class="pricing-header">
                                            <h4 class="text-center">Dimond</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>54</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 15 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 1TB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>