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
    <!--alerts CSS -->
    <link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
                    <h4 class="page-title">Progress bars</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 p-r-40">
                                <h3 class="box-title">Default Progress bars <a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h3>
                                <div class="collapse m-t-15" id="pgr1"> <pre class="line-numbers language-javascript"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar progress-bar-danger " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"&gt; &lt;span class="sr-only"&gt;50% Complete&lt;/span&gt;&lt;/div&gt;<br/>&lt;/div&gt;</code></pre> </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" style="width: 60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 p-r-40">
                                <h3 class="box-title">Default Progress bars <a class="get-code" data-toggle="collapse" href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h3>
                                <div class="collapse m-t-15" id="pgr2"> <pre class="line-numbers language-javascript"><code>&lt;div class="progress progress-lg"&gt;<br/>&lt;div class="progress-bar progress-bar-success" role="progressbar" style="width: 75%; role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code></pre> </div>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-success" style="width: 75%;" role="progressbar">75%</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <h3 class="box-title">Striped <a class="get-code" data-toggle="collapse" href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h3>
                                <div class="collapse m-t-15" id="pgr3"> <pre class="line-numbers language-javascript"><code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%;"&gt; &lt;span class="sr-only"&gt;85% Complete&lt;/span&gt;&lt;/div&gt;<br/>&lt;/div&gt;</code></pre> </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar progress-bar-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-b-40 p-b-40"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 p-r-40">
                                <h3 class="box-title m-b-0">Colored bars </h3>
                                <p class="text-muted m-b-30">You can give bootstrap colors to progress bars</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" style="width: 20%;" role="progressbar"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: 30%;" role="progressbar"> <span class="sr-only">30% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" style="width: 40%;" role="progressbar"> <span class="sr-only">40% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" style="width: 60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse" style="width: 80%;" role="progressbar"> <span class="sr-only">80% Complete</span> </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 p-r-40">
                                <h3 class="box-title m-b-0">All size Bars</h3>
                                <p class="text-muted m-b-30">Size whatever you want just add class <code>progress sm, md, lg</code></p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" style="width: 20%;" role="progressbar"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-info" style="width: 30%;" role="progressbar"> <span class="sr-only">30% Complete</span> </div>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar progress-bar-info" style="width: 60%;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-info" style="width: 80%;" role="progressbar"> <span class="sr-only">80% Complete</span> </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <h3 class="box-title m-b-0">Animated Bars</h3>
                                <p class="text-muted m-b-30">You can also use animated bar by just putting <code>active</code> class</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-success active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar progress-bar-warning active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-info active progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-b-40 p-b-40"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h3 class="box-title">Vertical Progress bars</h3>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:10%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:20%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:30%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:40%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height: 50%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:70%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h3 class="box-title">From bottom</h3>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:10%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:20%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:30%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:40%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height: 50%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-inverse progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:70%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h3 class="box-title">Striped</h3>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:10%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-sm progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:20%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-md progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:30%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-lg progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:40%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <h3 class="box-title">Vertical Progress bars</h3>
                                <div class="progress progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:10%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-sm progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:20%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-md progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:30%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                                <div class="progress progress-lg progress-vertical-bottom">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="height:40%;"> <span class="sr-only">88% Complete</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-b-40 p-b-40"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 p-r-40">
                                <h3 class="box-title">Animated Progress bars</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 p-r-40">
                                <h3 class="box-title">Stacked Progress bars </h3>
                                <div class="progress">
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-success wow animated progress-animated"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-info"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-warning progress-bar-striped active"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active"></div>
                                </div>
                                <div class="progress">
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-info wow animated progress-animated"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-inverse"></div>
                                </div>
                                <div class="progress">
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-inverse progress-bar-striped"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-info"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-warning progress-bar-striped active"></div>
                                </div>
                                <div class="progress progress-lg">
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-success progress-bar-striped"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;" class="progress-bar progress-bar-info"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 15%;" class="progress-bar progress-bar-warning progress-bar-striped active"></div>
                                    <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;" class="progress-bar progress-bar-danger progress-bar-striped active"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <h3 class="box-title">Skill bars </h3>
                                <h5>Photoshop<span class="pull-right">85%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                                <h5>Dreamweaver<span class="pull-right">80%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                                <h5>Illustrator<span class="pull-right">70%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 70%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                                <h5>Corel Draw<span class="pull-right">45%</span></h5>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
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