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
                    <h4 class="page-title">Knob Charts</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <h4>Examples <br/><small>Add <code> data-plugin="knob" data-width="xx" data-height="xx" data-fgColor="#xxx" data-displayInput=.. value="xxx" </code></small></h4>
                    <hr> </div>
            </div>
            <!-- /.row -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#03a9f3" data-displayInput=false value="50" />
                        <h6 class="text-muted m-t-10">Disable display input</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-cursor=true data-fgColor="#00c292" value="75" />
                        <h6 class="text-muted m-t-10">Cursor mode</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#fec107" data-displayPrevious=true value="89" />
                        <h6 class="text-muted m-t-10">Display previous value</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-min="-100" data-fgColor="#fb9678" data-displayPrevious=true data-angleOffset=-125 data-angleArc=250 value="56" />
                        <h6 class="text-muted m-t-10">Angle offset and arc</h6> </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-angleOffset="90" data-linecap="round" data-fgColor="#ab8ce4" value="90" />
                        <h6 class="text-muted m-t-10">Angle offset</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-min="-15000" data-displayPrevious=true data-max="15000" data-step="1000" value="10000" data-fgColor="#4c5667" />
                        <h6 class="text-muted m-t-10">5-digit values, step 1000</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#01c0c8" value="40" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                        <h6 class="text-muted m-t-10">Readonly</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="150" data-height="150" data-displayPrevious=true data-fgColor="#00c292" data-skin="tron" data-cursor=true value="75" data-thickness=".2" data-angleOffset=-125 data-angleArc=250 value="54" />
                        <h6 class="text-muted m-t-10">Angle offset and arc</h6> </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="220" data-height="220" data-linecap=round data-fgColor="#01c0c8" value="90" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".2" />
                        <h6 class="text-muted m-t-10">Readonly</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="180" data-height="180" data-linecap=round data-fgColor="#fec107" value="67" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                        <h6 class="text-muted m-t-10">Readonly</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round data-fgColor="#fb9678" value="70" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                        <h6 class="text-muted m-t-10">Readonly</h6> </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="white-box text-center">
                        <input data-plugin="knob" data-width="60" data-height="60" data-linecap=round data-fgColor="#ab8ce4" value="60" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />
                        <h6 class="text-muted m-t-10">Readonly</h6> </div>
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
    <!--jquery knob -->
    <script src="../plugins/bower_components/knob/jquery.knob.js"></script>
    <script>
        $(function () {
            $('[data-plugin="knob"]').knob();
        });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>