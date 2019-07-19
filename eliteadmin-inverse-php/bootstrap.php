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
                    <h4 class="page-title">Bootstrap UI</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="box-title m-b-0">Basic Tooltip</h3>
                                <p class="text-muted m-b-30">Just put this to any tag <code>data-toggle="tooltip" title="Default tooltip"</code></p>
                                <div class="button-box">
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="box-title m-b-0">Colored Tooltip</h3>
                                <p class="text-muted m-b-30">Six options are available: default,primary, warning, success, info, danger.</p>
                                <div class="demo-tooltip">
                                    <div class="tooltip top" role="tooltip">
                                        <div class="tooltip-arrow"></div>
                                        <div class="tooltip-inner"> Default </div>
                                    </div>
                                    <div class="tooltip top tooltip-primary" role="tooltip">
                                        <div class="tooltip-arrow"></div>
                                        <div class="tooltip-inner"> Default </div>
                                    </div>
                                    <div class="tooltip top tooltip-success" role="tooltip">
                                        <div class="tooltip-arrow"></div>
                                        <div class="tooltip-inner"> Success </div>
                                    </div>
                                    <div class="tooltip top tooltip-warning" role="tooltip">
                                        <div class="tooltip-arrow"></div>
                                        <div class="tooltip-inner"> Warning </div>
                                    </div>
                                    <div class="tooltip top tooltip-info" role="tooltip">
                                        <div class="tooltip-arrow"></div>
                                        <div class="tooltip-inner"> Info </div>
                                    </div>
                                    <div class="tooltip top tooltip-danger" role="tooltip">
                                        <div class="tooltip-arrow"></div>
                                        <div class="tooltip-inner"> Danger </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-b-40 p-b-40"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="box-title m-b-0">Clickable Tooltip</h3>
                                <p class="text-muted m-b-30">Four options are available: top, right, bottom, and left aligned.</p>
                                <div class="button-box">
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="top" title="" data-original-title="Tooltip on top">Click</button>
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="right" title="" data-original-title="Tooltip on right">Click</button>
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Click</button>
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-trigger="click" data-placement="left" title="" data-original-title="Tooltip on left">Click</button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="box-title m-b-0">Colored Tooltip</h3>
                                <p class="text-muted m-b-30">Four options are available: top, right, bottom, and left aligned.</p>
                                <div class="button-box">
                                    <button type="button" class="btn btn-default btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Default</button>
                                    <button type="button" class="btn btn-default btn-outline tooltip-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Primary</button>
                                    <button type="button" class="btn btn-default btn-outline tooltip-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Success</button>
                                    <button type="button" class="btn btn-default btn-outline tooltip-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Info</button>
                                    <button type="button" class="btn btn-default btn-outline tooltip-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Warning</button>
                                    <button type="button" class="btn btn-default btn-outline tooltip-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Danger</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="box-title m-b-0">Basic popover</h3>
                                <p class="text-muted m-b-30">Four options are available: top, right, bottom, and left aligned.</p>
                                <div class="button-box">
                                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Popover on top</button>
                                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title"> Popover on bottom </button>
                                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="right" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title"> Popover on right </button>
                                    <button type="button" class="btn btn-default btn-outline" data-container="body" title="" data-toggle="popover" data-placement="left" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title"> Popover on left </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-40 p-b-40"></div>
                            </div>
                            <div class="col-lg-12">
                                <h3 class="box-title m-b-0">Colored Popover</h3>
                                <p class="text-muted m-b-30">Six options are available: default,primary, warning, success, info, danger.</p>
                                <div class="demo-popover">
                                    <button type="button" class="btn btn-primary popover-primary sr-only"> Primary </button>
                                    <div class="popover top">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title">Primary</h3>
                                        <div class="popover-content">
                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary popover-success sr-only"> Primary </button>
                                    <div class="popover top">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title">Success</h3>
                                        <div class="popover-content">
                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary popover-info sr-only"> Primary </button>
                                    <div class="popover top">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title">Info</h3>
                                        <div class="popover-content">
                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary popover-warning sr-only"> Primary </button>
                                    <div class="popover top">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title">Warning</h3>
                                        <div class="popover-content">
                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam.</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-info popover-danger sr-only"> Primary </button>
                                    <div class="popover top">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title">Danger</h3>
                                        <div class="popover-content">
                                            <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-40 p-b-40"></div>
                            </div>
                            <div class="col-lg-12">
                                <h3 class="box-title m-b-0">Colored popover</h3>
                                <p class="text-muted m-b-30">Four options are available: top, right, bottom, and left aligned.</p>
                                <div class="button-box">
                                    <button type="button" class="btn btn-default btn-outline" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Default Popover</button>
                                    <button type="button" class="btn btn-default btn-outline popover-primary" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Primary Popover</button>
                                    <button type="button" class="btn btn-default btn-outline popover-info" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Info Popover</button>
                                    <button type="button" class="btn btn-default btn-outline popover-warning" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Warning Popover</button>
                                    <button type="button" class="btn btn-default btn-outline popover-success" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Success Popover</button>
                                    <button type="button" class="btn btn-default btn-outline popover-danger" title="" data-toggle="popover" data-placement="top" data-content="Photo booth Tofu biodiesel williamsburg marfa, four loko." data-original-title="Popover title">Danger Popover</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 m-b-40 p-b-40"></div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="box-title">Colleps Example</h3> <a class="btn btn-info m-r-15" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Link with href</a>
                                <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Link with button</button>
                                <div class="collapse m-t-15" id="collapseExample">
                                    <div class="well"> haven't heard of them. Photo booth Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title">Images shapes</h3>
                        <div class="row">
                            <div class="col-sm-4"> <img src="../plugins/images/big/img1.jpg" alt="image" class="img-responsive img-rounded" width="250" />
                                <p class="m-t-15 m-b-0"> <code>.img-rounded</code> </p>
                            </div>
                            <div class="col-sm-4 text-center"> <img src="../plugins/images/big/circle.jpg" alt="image" class="img-circle" width="170" />
                                <p class="m-t-15 m-b-0"> <code>.img-circle</code> </p>
                            </div>
                            <div class="col-sm-4 text-right"> <img src="../plugins/images/big/img3.jpg" alt="image" class="img-thumbnail " width="250" />
                                <p class="m-t-15 m-b-0"> <code>.img-thumbnail</code> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="white-box">
                        <h3 class="box-title">Pagination</h3>
                        <hr>
                        <h5 class="box-title">Default Pagination</h5>
                        <ul class="pagination">
                            <li> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                            <li> <a href="#">1</a> </li>
                            <li> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li> <a href="#">5</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                        </ul>
                        <h5 class="box-title">Disable & active state</h5>
                        <ul class="pagination pagination-split">
                            <li> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                            <li class="disabled"> <a href="#">1</a> </li>
                            <li class="active"> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li> <a href="#">5</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                        </ul>
                        <h5 class="box-title">Sizing</h5>
                        <ul class="pagination pagination-lg m-b-0">
                            <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                            <li> <a href="#">1</a> </li>
                            <li class="active"> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li> <a href="#">5</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                        </ul>
                        <ul class="pagination m-b-0">
                            <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                            <li> <a href="#">1</a> </li>
                            <li class="active"> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li> <a href="#">5</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                        </ul>
                        <ul class="pagination pagination-sm m-b-0">
                            <li class="disabled"> <a href="#"><i class="fa fa-angle-left"></i></a> </li>
                            <li> <a href="#">1</a> </li>
                            <li class="active"> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li> <a href="#">5</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-right"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Tooltips -->
                <div class="col-md-6">
                    <div class="white-box">
                        <h3 class="box-title">Pager Example</h3>
                        <hr>
                        <div class="clearfix m-b-20"></div>
                        <h5 class="box-title">Aligned Links</h5>
                        <ul class="pager">
                            <li class="previous"> <a href="#">← Older</a> </li>
                            <li class="next"> <a href="#">Newer →</a> </li>
                        </ul>
                        <div class="clearfix m-b-20"></div>
                        <h5 class="box-title">Optional Disabled State</h5>
                        <ul class="pager">
                            <li class="previous disabled"> <a href="#">← Older</a> </li>
                            <li class="next"> <a href="#">Newer →</a> </li>
                        </ul>
                        <ul class="pager">
                            <li> <a href="#"><i class="fa fa-angle-left"></i> Previous</a> </li>
                            <li> <a href="#">Next <i class="fa fa-angle-right"></i></a> </li>
                        </ul>
                    </div>
                    <!-- end col -->
                    <!-- end row -->
                    <!-- end white-box -->
                </div>
                <!-- end col -->
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