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
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
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
                    <h4 class="page-title">Inbox</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <!-- Left sidebar -->
                <div class="col-md-12">
                    <div class="white-box">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                                <div> <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Compose</a>
                                    <div class="list-group mail-list m-t-20"> <a href="#" class="list-group-item active">Inbox <span class="label label-rouded label-success pull-right">5</span></a> <a href="#" class="list-group-item ">Starred</a> <a href="#" class="list-group-item">Draft <span class="label label-rouded label-warning pull-right">15</span></a> <a href="#" class="list-group-item">Sent Mail</a> <a href="#" class="list-group-item">Trash <span class="label label-rouded label-default pull-right">55</span></a> </div>
                                    <h3 class="panel-title m-t-40 m-b-0">Labels</h3>
                                    <hr class="m-t-5">
                                    <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                                <div class="inbox-center">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="30">
                                                    <div class="checkbox m-t-0 m-b-0 ">
                                                        <input id="checkbox0" type="checkbox" class="checkbox-toggle" value="check all">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </th>
                                                <th colspan="4">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light m-r-5" data-toggle="dropdown" aria-expanded="false"> Filter <b class="caret"></b> </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#fakelink">Read</a></li>
                                                            <li><a href="#fakelink">Unread</a></li>
                                                            <li><a href="#fakelink">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#fakelink">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-refresh"></i> </button>
                                                    </div>
                                                </th>
                                                <th class="hidden-xs" width="100">
                                                    <div class="btn-group pull-right">
                                                        <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                        <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="unread">
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Hritik Roshan</td>
                                                <td class="max-texts"> <a href="inbox-detail.html" /><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</td>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> 12:30 PM </td>
                                            </tr>
                                            <tr class="unread">
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Genelia Roshan</td>
                                                <td class="max-texts"><a href="inbox-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 13 </td>
                                            </tr>
                                            <tr class="unread">
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Ritesh Deshmukh</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 12 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Akshay Kumar</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 12 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Hritik Roshan</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 12 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Genelia Roshan</td>
                                                <td class="max-texts"><a href="inbox-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 11 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Ritesh Deshmukh</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 11 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Akshay Kumar</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 11 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Hritik Roshan</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 10 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Genelia Roshan</td>
                                                <td class="max-texts"><a href="inbox-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 10 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Ritesh Deshmukh</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 10 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Akshay Kumar</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 09 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Hritik Roshan</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 09 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Genelia Roshan</td>
                                                <td class="max-texts"><a href="inbox-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 09 </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Ritesh Deshmukh</td>
                                                <td class="max-texts"><a href="inbox-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> May 09 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 m-t-20"> Showing 1 - 15 of 200 </div>
                                    <div class="col-xs-5 m-t-20">
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
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