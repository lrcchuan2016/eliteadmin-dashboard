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
            <h4 class="page-title">Ribbons</h4>
            </div>
            <!-- /.page title -->
            <!-- .breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-the-ultimate-dashboard-web-app-kit-material-design/16750820?ref=suniljoshi" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Ribbons</li>
            </ol>
            </div>
            <!-- /.breadcrumb -->
            </div>
            <!-- .row -->
<div class="row">
   <div class="col-md-12">
      <div class="white-box">
         <h3 class="box-title">Ribbons default</h3>
         <p>Add class: <code>.ribbon</code>. It must be inside <code>.ribbon-wrapper</code> class. Content should be inside <code>.ribbon-content</code> class.</p>
         <p>For colors, add: <code>.ribbon-default, .ribbon-primary, .ribbon-info, .ribbon-success, .ribbon-danger, .ribbon-warning, .ribbon-custom</code></p>
         <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-default">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-danger">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-success">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-primary">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-info">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-warning">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>   
         </div>
      </div>
   </div>
</div>
<!-- .row -->
<div class="row">
   <div class="col-md-12">
      <div class="white-box">
         <h3 class="box-title">Ribbons right align</h3>
         <p>Add class: <code>.ribbon-right</code></p>
         <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-right ribbon-default">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-right ribbon-danger">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-right ribbon-success">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-right ribbon-primary">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-right ribbon-info">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-right ribbon-warning">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>   
         </div>
      </div>
   </div>
</div>
<!-- .row -->
<div class="row">
   <div class="col-md-12">
      <div class="white-box">
         <h3 class="box-title">Vertical ribbons</h3>
         <p>Add class: <code>.ribbon-vertical-l</code> to display on left. Add class: <code>.ribbon-vertical-r</code> to display on right.</p>
         <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-vertical-l ribbon-default"><i class="fa fa-check-circle"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-vertical-l ribbon-danger"><i class="fa fa-check-circle"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-vertical-l ribbon-success"><i class="fa fa-check-circle"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-vertical-r ribbon-primary"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-vertical-r ribbon-info"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-vertical-r ribbon-warning"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>   
         </div>
      </div>
   </div>
</div>
<!-- .row -->
<div class="row">
   <div class="col-md-12">
      <div class="white-box">
         <h3 class="box-title">Bookmarked ribbons</h3>
         <p>Add class: <code>.ribbon-bookmark</code> right after the <code>.ribbon</code> class.
         <div class="row m-b-10">
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-bookmark ribbon-default">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-bookmark ribbon-right ribbon-danger">Ribbon</div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-bookmark ribbon-vertical-l ribbon-info"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-bookmark ribbon-vertical-r ribbon-success"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- .row -->
<div class="row">
   <div class="col-md-12">
      <div class="white-box">
         <h3 class="box-title">Corner ribbons</h3>
         <p>Add class: <code>.ribbon-corner</code>.
         <div class="row m-b-10">
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper">
                   <div class="ribbon ribbon-corner ribbon-info"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-reverse">
                   <div class="ribbon ribbon-corner ribbon-right ribbon-info"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-bottom">
                   <div class="ribbon ribbon-corner ribbon-info ribbon-bottom"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
               <div class="ribbon-wrapper-right-bottom">
                   <div class="ribbon ribbon-corner ribbon-info ribbon-right ribbon-bottom"><i class="fa fa-heart"></i></div>
                   <p class="ribbon-content">Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
               </div>
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
    
</body>

</html>