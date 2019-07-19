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
                    <h4 class="page-title">Material Floating Form</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box p-l-20 p-r-20">
                        <h3 class="box-title m-b-0">Animated Line Inputs Form With Floating Labels</h3>
                        <p class="text-muted m-b-30 font-13">Just add <code>floating-labels</code> class to the form.</p>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="floating-labels ">
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input1" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input1">Regular Input</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="password" class="form-control" id="input2" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input2">Password</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input3" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input3">Placeholder</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input4" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input4">Helping text</label> <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control" id="input5" data-toggle="tooltip" data-placement="bottom" title="input with tooltip!!" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input5">Input with tooltip</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <select class="form-control p-0" id="input6" required>
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input6">Input Select</label>
                                    </div>
                                    <div class="form-group m-b-5">
                                        <textarea class="form-control" rows="4" id="input7" required></textarea><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input7">Text area</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box p-l-20 p-r-20">
                        <h3 class="box-title m-b-0">Animated Line Inputs Form With Floating Lables</h3>
                        <p class="text-muted m-b-30 font-13">Just add <code>floating-labels</code> class to the form and <code>has-warning, has-success, has-error</code> for various inputs. For input with icon add <code>has-feedback</code> class. </p>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="floating-labels">
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control input-lg" id="input8" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input8">Large Input</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                        <input type="text" class="form-control input-sm" id="input9" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input9">Small Input</label>
                                    </div>
                                    <div class="form-group has-warning m-b-40">
                                        <input type="text" class="form-control" id="input10" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input10">Warning State</label>
                                    </div>
                                    <div class="form-group has-success m-b-40">
                                        <input type="text" class="form-control" id="input11" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input11">Success State</label>
                                    </div>
                                    <div class="form-group has-error m-b-40">
                                        <input type="text" class="form-control" id="input12" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input12">Error State</label>
                                    </div>
                                    <div class="form-group has-warning has-feedback m-b-40">
                                        <input type="text" class="form-control" id="input13" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input13">Warning State With Feedback</label> <span class="glyphicon glyphicon-warning-sign form-control-feedback t-0"></span> </div>
                                    <div class="form-group has-success has-feedback m-b-40">
                                        <input type="text" class="form-control" id="input14" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input14">Success State With Feedback</label> <span class="glyphicon glyphicon-ok form-control-feedback t-0"></span> </div>
                                    <div class="form-group has-error has-feedback m-b-5">
                                        <input type="text" class="form-control" id="input15" required><span class="highlight"></span> <span class="bar"></span>
                                        <label for="input15">Error State With Feedback</label> <span class="glyphicon glyphicon-remove form-control-feedback t-0"></span> </div>
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
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>