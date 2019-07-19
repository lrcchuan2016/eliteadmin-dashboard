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
    include 'php/breadcrumbs.php';
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Animation Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                        <!--
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Animation Page</li>
                    </ol>
-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Animation</h3> <small>Select the animation style class and check the animation to the image, you can use any of this animation to anywhere, just place exact word. example <code>.bounce</code></small>
                        <!-- Form -->
                        <form class="m-b-30 m-t-40">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="input-group">
                                        <select class="form-control js--animations">
                                            <optgroup label="Attention Seekers">
                                                <option value="bounce">bounce</option>
                                                <option value="flash">flash</option>
                                                <option value="pulse">pulse</option>
                                                <option value="rubberBand">rubberBand</option>
                                                <option value="shake">shake</option>
                                                <option value="swing">swing</option>
                                                <option value="tada">tada</option>
                                                <option value="wobble">wobble</option>
                                                <option value="jello">jello</option>
                                            </optgroup>
                                            <optgroup label="Bouncing Entrances">
                                                <option value="bounceIn">bounceIn</option>
                                                <option value="bounceInDown">bounceInDown</option>
                                                <option value="bounceInLeft">bounceInLeft</option>
                                                <option value="bounceInRight">bounceInRight</option>
                                                <option value="bounceInUp">bounceInUp</option>
                                            </optgroup>
                                            <optgroup label="Bouncing Exits">
                                                <option value="bounceOut">bounceOut</option>
                                                <option value="bounceOutDown">bounceOutDown</option>
                                                <option value="bounceOutLeft">bounceOutLeft</option>
                                                <option value="bounceOutRight">bounceOutRight</option>
                                                <option value="bounceOutUp">bounceOutUp</option>
                                            </optgroup>
                                            <optgroup label="Fading Entrances">
                                                <option value="fadeIn">fadeIn</option>
                                                <option value="fadeInDown">fadeInDown</option>
                                                <option value="fadeInDownBig">fadeInDownBig</option>
                                                <option value="fadeInLeft">fadeInLeft</option>
                                                <option value="fadeInLeftBig">fadeInLeftBig</option>
                                                <option value="fadeInRight">fadeInRight</option>
                                                <option value="fadeInRightBig">fadeInRightBig</option>
                                                <option value="fadeInUp">fadeInUp</option>
                                                <option value="fadeInUpBig">fadeInUpBig</option>
                                            </optgroup>
                                            <optgroup label="Fading Exits">
                                                <option value="fadeOut">fadeOut</option>
                                                <option value="fadeOutDown">fadeOutDown</option>
                                                <option value="fadeOutDownBig">fadeOutDownBig</option>
                                                <option value="fadeOutLeft">fadeOutLeft</option>
                                                <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                                <option value="fadeOutRight">fadeOutRight</option>
                                                <option value="fadeOutRightBig">fadeOutRightBig </option>
                                                <option value="fadeOutUp">fadeOutUp</option>
                                                <option value="fadeOutUpBig">fadeOutUpBig</option>
                                            </optgroup>
                                            <optgroup label="Flippers">
                                                <option value="flip">flip</option>
                                                <option value="flipInX">flipInX</option>
                                                <option value="flipInY">flipInY</option>
                                                <option value="flipOutX">flipOutX</option>
                                                <option value="flipOutY">flipOutY</option>
                                            </optgroup>
                                            <optgroup label="Lightspeed">
                                                <option value="lightSpeedIn">lightSpeedIn</option>
                                                <option value="lightSpeedOut">lightSpeedOut</option>
                                            </optgroup>
                                            <optgroup label="Rotating Entrances">
                                                <option value="rotateIn">rotateIn</option>
                                                <option value="rotateInDownLeft">rotateInDownLeft </option>
                                                <option value="rotateInDownRight">rotateInDownRight </option>
                                                <option value="rotateInUpLeft">rotateInUpLeft</option>
                                                <option value="rotateInUpRight">rotateInUpRight </option>
                                            </optgroup>
                                            <optgroup label="Rotating Exits">
                                                <option value="rotateOut">rotateOut</option>
                                                <option value="rotateOutDownLeft">rotateOutDownLeft </option>
                                                <option value="rotateOutDownRight"> rotateOutDownRight </option>
                                                <option value="rotateOutUpLeft">rotateOutUpLeft </option>
                                                <option value="rotateOutUpRight">rotateOutUpRight </option>
                                            </optgroup>
                                            <optgroup label="Sliding Entrances">
                                                <option value="slideInUp">slideInUp</option>
                                                <option value="slideInDown">slideInDown</option>
                                                <option value="slideInLeft">slideInLeft</option>
                                                <option value="slideInRight">slideInRight</option>
                                            </optgroup>
                                            <optgroup label="Sliding Exits">
                                                <option value="slideOutUp">slideOutUp</option>
                                                <option value="slideOutDown">slideOutDown</option>
                                                <option value="slideOutLeft">slideOutLeft</option>
                                                <option value="slideOutRight">slideOutRight</option>
                                            </optgroup>
                                            <optgroup label="Zoom Entrances">
                                                <option value="zoomIn">zoomIn</option>
                                                <option value="zoomInDown">zoomInDown</option>
                                                <option value="zoomInLeft">zoomInLeft</option>
                                                <option value="zoomInRight">zoomInRight</option>
                                                <option value="zoomInUp">zoomInUp</option>
                                            </optgroup>
                                            <optgroup label="Zoom Exits">
                                                <option value="zoomOut">zoomOut</option>
                                                <option value="zoomOutDown">zoomOutDown</option>
                                                <option value="zoomOutLeft">zoomOutLeft</option>
                                                <option value="zoomOutRight">zoomOutRight</option>
                                                <option value="zoomOutUp">zoomOutUp</option>
                                            </optgroup>
                                            <optgroup label="Specials">
                                                <option value="hinge">hinge</option>
                                                <option value="rollIn">rollIn</option>
                                                <option value="rollOut">rollOut</option>
                                            </optgroup>
                                        </select> <span class="input-group-btn">
                                  <button class="btn btn-info js--triggerAnimation"
                                          type="button">Animate Me !
                                  </button>
                                </span> </div>
                                </div>
                            </div>
                        </form>
                        <!-- / Form -->
                        <!-- div -->
                        <div class="text-center"> <span id="animationSandbox" style="display: block;">
                      <img src="../plugins/images/img2.jpg">
                </span> </div>
                        <!-- / div -->
                    </div>
                </div>
            </div>
            <!-- /.Row -->
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
    <script>
        function testAnim(x) {
            $('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });
        };
        $(document).ready(function () {
            $('.js--triggerAnimation').click(function (e) {
                e.preventDefault();
                var anim = $('.js--animations').val();
                testAnim(anim);
            });
            $('.js--animations').change(function () {
                var anim = $(this).val();
                testAnim(anim);
            });
        });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>