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
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
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
                    <h4 class="page-title">Notifications</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Simple Toastr Alerts</h3>
                        <p class="text-muted m-b-20">You can use four different alert <code>info, warning, success, and error</code> message.</p>
                        <div class="button-box">
                            <button class="tst1 btn btn-info">Info Message</button>
                            <button class="tst2 btn btn-warning">Warning Message</button>
                            <button class="tst3 btn btn-success">Success Message</button>
                            <button class="tst4 btn btn-danger">Danger Message</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Fullwidth top </h3>
                                <button id="" class="btn btn-default btn-outline showtop">Alert Top Full width</button>
                                <!-- Start an Alert -->
                                <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-success myadmin-alert-top alerttop"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish. <a href="#" class="closed">&times;</a> </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Fullwidth Bottom </h3>
                                <button id="" class="btn btn-default btn-outline showbottom">Alert Bottom Full width</button>
                                <!-- Start an Alert -->
                                <div class="myadmin-alert myadmin-alert-icon myadmin-alert-click alert-danger myadmin-alert-bottom alertbottom"> <i class="ti-user"></i> This is an example top alert. You can edit what u wish. <a href="#" class="closed">&times;</a> </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Fullwidth top </h3>
                                <button id="" class="btn btn-default btn-outline showtop2">Alert Fullwidth Top with image</button>
                                <!-- Start an Alert -->
                                <div class="myadmin-alert myadmin-alert-img myadmin-alert-click alert-info myadmin-alert-top alerttop2"> <img src="../plugins/images/users/genu.jpg" class="img" alt="img"><a href="#" class="closed">&times;</a>
                                    <h4>You have a Message!</h4> <b>John Doe</b> sent you a message. <a href="#" class="closed">&times;</a> </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Fullwidth Bottom with image </h3>
                                <button class="btn btn-default btn-outline showbottom2">Alert Bottom Full width</button>
                                <!-- Start an Alert -->
                                <div class="myadmin-alert myadmin-alert-img myadmin-alert-click alert-warning myadmin-alert-bottom alertbottom2"> <img src="../plugins/images/users/genu.jpg" class="img" alt="img"><a href="#" class="closed">&times;</a>
                                    <h4>You have a Message!</h4> <b>John Doe</b> sent you a message. <a href="#" class="closed">&times;</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Top Right </h3>
                                <button id="showtopright" class="btn btn-default btn-outline">Show Top Right</button>
                                <!-- Start an Alert -->
                                <div id="alerttopright" class="myadmin-alert myadmin-alert-img alert-info myadmin-alert-top-right"> <img src="../plugins/images/users/genu.jpg" class="img" alt="img"><a href="#" class="closed">&times;</a>
                                    <h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Top Left</h3>
                                <button id="showtopleft" class="btn btn-default btn-outline">Show Top Left</button>
                                <!-- Start an Alert -->
                                <div id="alerttopleft" class="myadmin-alert myadmin-alert-img alert-info myadmin-alert-top-left"> <img src="../plugins/images/users/genu.jpg" class="img" alt="img"><a href="#" class="closed">&times;</a>
                                    <h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Bottom Left </h3>
                                <button id="showbottomleft" class="btn btn-default btn-outline">Show Bottom Left</button>
                                <!-- Start an Alert -->
                                <div id="alertbottomleft" class="myadmin-alert myadmin-alert-img alert-info myadmin-alert-bottom-left"> <img src="../plugins/images/users/genu.jpg" class="img" alt="img"><a href="#" class="closed">&times;</a>
                                    <h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12">
                                <h3 class="box-title">Alert Bottom Right </h3>
                                <button id="showbottomright" class="btn btn-default btn-outline">Show Top Right</button>
                                <!-- Start an Alert -->
                                <div id="alertbottomright" class="myadmin-alert myadmin-alert-img alert-info myadmin-alert-bottom-right"> <img src="../plugins/images/users/genu.jpg" class="img" alt="img"><a href="#" class="closed">&times;</a>
                                    <h4>You have a Message!</h4> <b>John Doe</b> sent you a message.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Normal Alerts</h3>
                        <div class="alert alert-success"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                        <div class="alert alert-info"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                        <div class="alert alert-warning"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                        <div class="alert alert-danger"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                    </div>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Dismissable Alerts</h3>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
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
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="js/toastr.js"></script>
    <script type="text/javascript">
        //Alerts
        $(".myadmin-alert .closed").click(function (event) {
            $(this).parents(".myadmin-alert").fadeToggle(350);
            return false;
        });
        /* Click to close */
        $(".myadmin-alert-click").click(function (event) {
            $(this).fadeToggle(350);
            return false;
        });
        $(".showtop").click(function () {
            $(".alerttop").fadeToggle(350);
        });
        $(".showtop2").click(function () {
            $(".alerttop2").fadeToggle(350);
        });
        /** Alert Position Bottom  **/
        $(".showbottom").click(function () {
            $(".alertbottom").fadeToggle(350);
        });
        $(".showbottom2").click(function () {
            $(".alertbottom2").fadeToggle(350);
        });
        /** Alert Position Top Left  **/
        $("#showtopleft").click(function () {
            $("#alerttopleft").fadeToggle(350);
        });
        /** Alert Position Top Right  **/
        $("#showtopright").click(function () {
            $("#alerttopright").fadeToggle(350);
        });
        /** Alert Position Bottom Left  **/
        $("#showbottomleft").click(function () {
            $("#alertbottomleft").fadeToggle(350);
        });
        /** Alert Position Bottom Right  **/
        $("#showbottomright").click(function () {
            $("#alertbottomright").fadeToggle(350);
        });
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>