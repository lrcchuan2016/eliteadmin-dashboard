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
            <!-- .page title -->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Process Steps</h4>
            </div>
            <!-- /.page title -->
            <!-- .breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-the-ultimate-dashboard-web-app-kit-material-design/16750820?ref=suniljoshi" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Process Steps</li>
            </ol>
            </div>
            <!-- /.breadcrumb -->
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps default</h3>
                  <div class="row default-steps">
                     <div class="col-md-4 column-step">
                        <div class="step-number">1</div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step active">
                        <div class="step-number">2</div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">3</div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps thin</h3>
                  <div class="row thin-steps">
                     <div class="col-md-4 column-step">
                        <div class="step-number">1</div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">2</div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step active">
                        <div class="step-number">3</div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps with no background</h3>
                  <div class="row steps-no-bg">
                     <div class="col-md-4 column-step">
                        <div class="step-number">1</div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step active">
                        <div class="step-number">2</div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">3</div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps thin with no background</h3>
                  <div class="row thin-steps-no-bg">
                     <div class="col-md-4 column-step active">
                        <div class="step-number">1</div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">2</div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">3</div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps with number background</h3>
                  <div class="row numbered-bg">
                     <div class="col-md-4 column-step">
                        <div class="step-number">1</div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step active">
                        <div class="step-number">2</div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">3</div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps thin with number background</h3>
                  <div class="row thin-steps-numbered-bg">
                     <div class="col-md-4 column-step active">
                        <div class="step-number">1</div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">2</div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step">
                        <div class="step-number">3</div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps with line (3 steps)</h3>
                  <div class="row line-steps">
                     <div class="col-md-4 column-step start">
                        <div class="step-number">1</div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step active">
                        <div class="step-number">2</div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step finish">
                        <div class="step-number">3</div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps with line (4 steps)</h3>
                  <div class="row line-steps">
                     <div class="col-md-3 column-step start">
                        <div class="step-number">1</div>
                        <div class="step-title">Manufacturing</div>
                        <div class="step-info">Making of the product</div>
                     </div>
                     <div class="col-md-3 column-step active">
                        <div class="step-number">2</div>
                        <div class="step-title">Testing</div>
                        <div class="step-info">Testing of the product</div>
                     </div>
                     <div class="col-md-3 column-step upcoming">
                        <div class="step-number">3</div>
                        <div class="step-title">Launching</div>
                        <div class="step-info">Launching of the product</div>
                     </div>
                     <div class="col-md-3 column-step finish">
                        <div class="step-number">4</div>
                        <div class="step-title">Marketing</div>
                        <div class="step-info">Marketing of the product</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-md-12">
               <div class="white-box">
                  <h3 class="box-title">steps with line (Using Icons)</h3>
                  <div class="row line-steps">
                     <div class="col-md-4 column-step start">
                        <div class="step-number"><i class="fa fa-money"></i></div>
                        <div class="step-title">BUY</div>
                        <div class="step-info">Buying the item</div>
                     </div>
                     <div class="col-md-4 column-step active">
                        <div class="step-number"><i class="fa fa-cc-mastercard"></i></div>
                        <div class="step-title">PAY</div>
                        <div class="step-info">Payment of the item</div>
                     </div>
                     <div class="col-md-4 column-step finish">
                        <div class="step-number"><i class="fa fa-shopping-cart"></i></div>
                        <div class="step-title">GET DELIVERY</div>
                        <div class="step-info">Receiving the item</div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
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