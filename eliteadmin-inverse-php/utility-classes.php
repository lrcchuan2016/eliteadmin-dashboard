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
                    <h4 class="page-title">Utility Classes</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <!-- .row -->
                        <div class="row">
                            <!-- .col -->
                            <div class="col-sm-6">
                                <h3 class="box-title">Float Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap" width="150">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.pull-left</code> </td>
                                            <td>Element to the left (float:left).</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.pull-right</code> </td>
                                            <td>Element to the right(float:right).</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.clearfix</code> </td>
                                            <td>To Clear floats.(clreafix)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap" width="150">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.show</code> </td>
                                            <td>Element to Show (display: block)</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.hidden</code> </td>
                                            <td>Element to hide (display: none)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-6">
                                <h3 class="box-title">Text Color Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-muted</code> </td>
                                            <td class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-primary</code> </td>
                                            <td class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-success</code> </td>
                                            <td class="text-success">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-info</code> </td>
                                            <td class="text-info">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-warning</code> </td>
                                            <td class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.text-danger</code> </td>
                                            <td class="text-danger">Nullam id dolor id nibh ultricies vehicula ut id elit.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr/> </div>
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-0</code> </td>
                                            <td>Padding will be 0px from all side.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-10</code> </td>
                                            <td>Padding will be 10px from all side.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-20</code> </td>
                                            <td>Padding will be 20px from all side</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding Left Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-l-0</code> </td>
                                            <td>Only Padding Left will be 0px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-l-10 </code> </td>
                                            <td>Only Padding Left will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-l-20</code> </td>
                                            <td>Only Padding Left will be 20px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding right Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-r-0</code> </td>
                                            <td>Only Padding right will be 0px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-r-10 </code> </td>
                                            <td>Only Padding right will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-r-20</code> </td>
                                            <td>Only Padding right will be 20px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Padding top Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-t-0</code> </td>
                                            <td>Only Padding top will be 0px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-t-10 </code> </td>
                                            <td>Only Padding top will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.p-t-20</code> </td>
                                            <td>Only Padding top will be 20px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr/> </div>
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin top Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-5</code> </td>
                                            <td>Only Margin top will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-10 </code> </td>
                                            <td>Only Margin top will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-15 </code> </td>
                                            <td>Only Margin top will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-20</code> </td>
                                            <td>Only Margin top will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-30</code> </td>
                                            <td>Only Margin top will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                            <td>Only Margin top will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin Bottom Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-5</code> </td>
                                            <td>Only Margin Bottom will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-10 </code> </td>
                                            <td>Only Margin Bottom will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-15 </code> </td>
                                            <td>Only Margin Bottom will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-20</code> </td>
                                            <td>Only Margin Bottom will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-b-30</code> </td>
                                            <td>Only Margin Bottom will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-t-40</code> </td>
                                            <td>Only Margin top will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin Right Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-5</code> </td>
                                            <td>Only Margin Right will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-10 </code> </td>
                                            <td>Only Margin Right will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-15 </code> </td>
                                            <td>Only Margin Right will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-20</code> </td>
                                            <td>Only Margin Right will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-30</code> </td>
                                            <td>Only Margin Right will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-r-40</code> </td>
                                            <td>Only Margin Right will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Margin Left Classes</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-5</code> </td>
                                            <td>Only Margin Left will be 5px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-10 </code> </td>
                                            <td>Only Margin Left will be 10px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-15 </code> </td>
                                            <td>Only Margin Left will be 15px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-20</code> </td>
                                            <td>Only Margin Left will be 20px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-30</code> </td>
                                            <td>Only Margin Left will be 30px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.m-l-40</code> </td>
                                            <td>Only Margin Left will be 40px.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr/> </div>
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Vertical Align</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.vt</code> </td>
                                            <td>Element - vertical align top.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.vb</code> </td>
                                            <td>Element - vertical align bottom.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.vertical-middle </code> </td>
                                            <td>Element - vertical align middle.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Font Weight</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.font-light</code> </td>
                                            <td>Font weight will be light (300).</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.font-normal</code> </td>
                                            <td>Font weight will be normal</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.font-bold </code> </td>
                                            <td>Font weight will be bold (700)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">Border</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-all</code> </td>
                                            <td>Border 1px all side.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-none</code> </td>
                                            <td>border none all side</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-t </code> </td>
                                            <td>border top 1px </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-sm-3">
                                <h3 class="box-title">&nbsp;</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-b</code> </td>
                                            <td>Border bottom 1px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-l</code> </td>
                                            <td>border left 1px.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.b-r</code> </td>
                                            <td>border right 1px </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- /.col -->
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped responsive-utilities">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
                                                <th> Small devices <small>Tablets (≥768px)</small> </th>
                                                <th> Medium devices <small>Desktops (≥992px)</small> </th>
                                                <th> Large devices <small>Desktops (≥1200px)</small> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><code>.visible-xs-*</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.visible-sm-*</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.visible-md-*</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.visible-lg-*</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><code>.hidden-xs</code></th>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.hidden-sm</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.hidden-md</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                                <td class="is-visible">Visible</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><code>.hidden-lg</code></th>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-visible">Visible</td>
                                                <td class="is-hidden">Hidden</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-12 m-t-40 m-b-40">
                                <hr> </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <h3 class="box-title">Background Colors</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-primary</code> </td>
                                            <td>For Primary background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-success</code> </td>
                                            <td>For Success (green) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-info</code> </td>
                                            <td>For info (Blue) background color</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <h3 class="box-title">&nbsp;</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-warning</code> </td>
                                            <td>For Warning (yellow) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-danger</code> </td>
                                            <td>For Danger (red) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-theme</code> </td>
                                            <td>For Theme background color</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <h3 class="box-title">&nbsp;</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Class</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-theme-dark</code> </td>
                                            <td>For theme dark background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-inverse </code> </td>
                                            <td>For inverse (dark) background color</td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> <code>.bg-purple</code> </td>
                                            <td>For Purple background color</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
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