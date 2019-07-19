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
    <link href="../plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
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
                    <h4 class="page-title">Bootstrap Table</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Bootstrap Simple Table</h3>
                        <p class="text-muted m-b-30">Simple table example</p>
                        <table data-toggle="table" data-height="250" data-mobile-responsive="true" class="table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Stars</th>
                                    <th>Forks</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="tr-id-1" class="tr-class-1">
                                    <td id="td-id-1" class="td-class-1"> bootstrap-table </td>
                                    <td>526</td>
                                    <td>122</td>
                                    <td>An extended Bootstrap table with radio, checkbox, sort, pagination, and other added features. (supports twitter bootstrap v2 and v3) </td>
                                </tr>
                                <tr id="tr-id-2" class="tr-class-2">
                                    <td id="td-id-2" class="td-class-2"> multiple-select </td>
                                    <td>288</td>
                                    <td>150</td>
                                    <td>A jQuery plugin to select multiple elements with checkboxes :) </td>
                                </tr>
                                <tr id="tr-id-3" class="tr-class-3">
                                    <td id="td-id-3" class="td-class-3"> bootstrap-show-password </td>
                                    <td>32</td>
                                    <td>11</td>
                                    <td>Show/hide password plugin for twitter bootstrap. </td>
                                </tr>
                                <tr id="tr-id-4" class="tr-class-4">
                                    <td id="td-id-4" class="td-class-4"> blog </td>
                                    <td>13</td>
                                    <td>4</td>
                                    <td>my blog</td>
                                </tr>
                                <tr id="tr-id-5" class="tr-class-5">
                                    <td id="td-id-5" class="td-class-5"> scutech-redmine
                                        <td>6</td>
                                        <td>3</td>
                                        <td>Redmine notification tools for chrome extension.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Bootstrap Data From js</h3>
                        <p class="text-muted m-b-30">Sample data From js</p>
                        <table id="smptable" class="table">
                            <thead>
                                <tr>
                                    <th data-field="name">Name</th>
                                    <th data-field="stargazers_count">Stars</th>
                                    <th data-field="forks_count">Forks</th>
                                    <th data-field="description">Description</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Sortable table</h3>
                        <p class="text-muted m-b-30">Basic sortable table</p>
                        <table data-toggle="table" data-url="https://api.github.com/users/wenzhixin/repos?type=owner&sort=full_name&direction=asc&per_page=100&page=1" data-sort-name="stargazers_count" data-height="280" data-mobile-responsive="true" data-sort-order="desc" class="table">
                            <thead>
                                <tr>
                                    <th data-field="name" data-sortable="true"> Name </th>
                                    <th data-field="stargazers_count" data-sortable="true" data-width="100"> Stars </th>
                                    <th data-field="forks_count" data-sortable="true" data-width="100"> Forks </th>
                                    <th data-field="description" data-sortable="true"> Description </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Sortable table</h3>
                        <p class="text-muted m-b-30">Basic sortable table</p>
                        <table id="clmtable" data-show-columns="true" data-height="300"> </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Table with radio button</h3>
                        <p class="text-muted m-b-30">data with radiobutton</p>
                        <table data-toggle="table" data-url="http://themedesigner.in/demo/myadmin/myadmin/bower_components/bootstrap-table/bootstrap-test.json" data-click-to-select="true" data-select-item-name="myRadioName" data-height="295">
                            <thead>
                                <tr>
                                    <th data-field="state" data-radio="true"></th>
                                    <th data-field="name">Name</th>
                                    <th data-field="price">Price</th>
                                    <th data-field="column1">Columns1</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Table with checkbox</h3>
                        <p class="text-muted m-b-30">data with checkbox</p>
                        <table data-toggle="table" data-url="http://themedesigner.in/demo/myadmin/myadmin/bower_components/bootstrap-table/bootstrap-test.json" data-click-to-select="true" data-height="295">
                            <thead>
                                <tr>
                                    <th data-field="state" data-checkbox="true"></th>
                                    <th data-field="name">Name</th>
                                    <th data-field="price">Price</th>
                                    <th data-field="column1">Columns1</th>
                                </tr>
                            </thead>
                        </table>
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
    <script src="../plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-table/dist/bootstrap-table.ints.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>