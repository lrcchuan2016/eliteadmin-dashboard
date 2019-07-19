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
    <!-- xeditable css -->
    <link href="../plugins/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
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
                    <h4 class="page-title">Form Dropzone</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">X -Editable</h3>
                        <p class="text-muted m-b-30 font-13"> Inline editor</p>
                        <div class="row">
                            <div class="col-md-12">
                                <table style="clear: both" class="table table-bordered table-striped" id="user">
                                    <tbody>
                                        <tr>
                                            <td width="35%">Simple text field</td>
                                            <td width="65%"><a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                                        </tr>
                                        <tr>
                                            <td>Empty text field, required</td>
                                            <td>
                                                <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Select, local array, custom display</td>
                                            <td>
                                                <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Select, error while loading</td>
                                            <td><a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                                        </tr>
                                        <tr>
                                            <td>Combodate</td>
                                            <td>
                                                <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Textarea, buttons below</td>
                                            <td><a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">X -Editable</h3>
                        <p class="text-muted m-b-30 font-13"> Popup editor</p>
                        <div class="row">
                            <div class="col-md-12">
                                <table style="clear: both" class="table table-bordered table-striped" id="user">
                                    <tbody>
                                        <tr>
                                            <td width="35%">Simple text field</td>
                                            <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
                                        </tr>
                                        <tr>
                                            <td>Empty text field, required</td>
                                            <td>
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Select, local array, custom display</td>
                                            <td>
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Select, error while loading</td>
                                            <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
                                        </tr>
                                        <tr>
                                            <td>Combodate</td>
                                            <td>
                                                <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Textarea, buttons below</td>
                                            <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <!-- Dropzone Plugin JavaScript -->
    <!-- jQuery x-editable -->
    <script src="../plugins/bower_components/moment/moment.js"></script>
    <script type="text/javascript" src="../plugins/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script type="text/javascript">
        $(function () {
            //editables 
            $('#username').editable({
                type: 'text'
                , pk: 1
                , name: 'username'
                , title: 'Enter username'
            });
            $('#firstname').editable({
                validate: function (value) {
                    if ($.trim(value) == '') return 'This field is required';
                }
            });
            $('#sex').editable({
                prepend: "not selected"
                , source: [
                    {
                        value: 1
                        , text: 'Male'
                }
                , {
                        value: 2
                        , text: 'Female'
                }
      ]
                , display: function (value, sourceData) {
                    var colors = {
                            "": "#98a6ad"
                            , 1: "#5fbeaa"
                            , 2: "#5d9cec"
                        }
                        , elem = $.grep(sourceData, function (o) {
                            return o.value == value;
                        });
                    if (elem.length) {
                        $(this).text(elem[0].text).css("color", colors[value]);
                    }
                    else {
                        $(this).empty();
                    }
                }
            });
            $('#status').editable();
            $('#group').editable({
                showbuttons: false
            });
            $('#dob').editable();
            $('#comments').editable({
                showbuttons: 'bottom'
            });
            //inline
            $('#inline-username').editable({
                type: 'text'
                , pk: 1
                , name: 'username'
                , title: 'Enter username'
                , mode: 'inline'
            });
            $('#inline-firstname').editable({
                validate: function (value) {
                    if ($.trim(value) == '') return 'This field is required';
                }
                , mode: 'inline'
            });
            $('#inline-sex').editable({
                prepend: "not selected"
                , mode: 'inline'
                , source: [
                    {
                        value: 1
                        , text: 'Male'
                }
                , {
                        value: 2
                        , text: 'Female'
                }
      ]
                , display: function (value, sourceData) {
                    var colors = {
                            "": "#98a6ad"
                            , 1: "#5fbeaa"
                            , 2: "#5d9cec"
                        }
                        , elem = $.grep(sourceData, function (o) {
                            return o.value == value;
                        });
                    if (elem.length) {
                        $(this).text(elem[0].text).css("color", colors[value]);
                    }
                    else {
                        $(this).empty();
                    }
                }
            });
            $('#inline-status').editable({
                mode: 'inline'
            });
            $('#inline-group').editable({
                showbuttons: false
                , mode: 'inline'
            });
            $('#inline-dob').editable({
                mode: 'inline'
            });
            $('#inline-comments').editable({
                showbuttons: 'bottom'
                , mode: 'inline'
            });
        });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>