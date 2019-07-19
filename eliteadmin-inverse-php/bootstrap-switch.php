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
    <link href="../plugins/bower_components/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
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
            <h4 class="page-title">Bootstrap Switch</h4>
            </div>
            <!-- /.page title -->
            <!-- .breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-the-ultimate-dashboard-web-app-kit-material-design/16750820?ref=suniljoshi" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Bootstrap Switch</li>
            </ol>
            </div>
            <!-- /.breadcrumb -->
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-lg-12">
                  <div class="white-box">
                     <h3 class="box-title">Bootstrap Switch</h3>
                     <div class="row">
                        <div class="col-lg-12 bt-switch">
                           <h4>Sizes</h4>
                           <p class="text-muted font-13">Just add <code>data-size="Size"</code> attribute to the <code>&lt;input type="checkbox"...&gt;</code>. Size values: <code>mini, small, normal, large</code>.</p>
                           <div class="m-b-30">
                              <input type="checkbox" checked data-size="mini" />
                              <input type="checkbox" checked data-size="small" />
                              <input type="checkbox" checked data-size="normal" />
                              <input type="checkbox" checked data-size="large" />
                           </div>
                           
                           <h4>Colors</h4>
                           <p class="text-muted font-13">Just add <code>data-on-color="Color"</code> & <code>data-off-color="Color"</code> to the <code>&lt;input type="checkbox"...&gt;</code>. Color values: <code>primary, info, success, warning, danger, default</code>.</p>
                           <div class="m-b-30">
                              <input type="checkbox" checked data-on-color="primary" data-off-color="info">
                              <input type="checkbox" checked data-on-color="info" data-off-color="success">
                              <input type="checkbox" checked data-on-color="success" data-off-color="warning">
                              <input type="checkbox" checked data-on-color="warning" data-off-color="danger">
                              <input type="checkbox" checked data-on-color="danger" data-off-color="default">
                              <input type="checkbox" checked data-on-color="default" data-off-color="primary"> 
                           </div>

                           <h4>Disabled/Readonly</h4>
                           <p class="text-muted font-13">Just add <code>disabled</code> or <code>readonly</code> attribute to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                           <div class="m-b-30">
                              <input type="checkbox" checked disabled data-on-color="primary" data-off-color="info">
                              <input type="checkbox" readonly data-on-color="info" data-off-color="success">
                           </div>

                           <h4>With Text</h4>
                           <p class="text-muted font-13">Just add <code>data-on-text="Text"</code> & <code>data-off-text="Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                           <div class="m-b-30">
                              <input type="checkbox" checked data-on-color="success" data-off-color="info" data-on-text="Yes" data-off-text="No">
                              <input type="checkbox" checked data-on-color="info" data-off-color="success" data-on-text="1" data-off-text="0">
                           </div>

                           <h4>With Long Text</h4>
                           <p class="text-muted font-13">Just add <code>data-on-text="Long Text"</code> & <code>data-off-text="Long Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                           <div class="m-b-30">
                              <input type="checkbox" checked data-on-color="danger" data-off-color="warning" data-on-text="Explicit" data-off-text="Implicit">
                              <input type="checkbox" checked data-on-color="warning" data-off-color="danger" data-on-text="Enabled" data-off-text="Disabled">
                           </div>

                           <h4>Label Text</h4>
                           <p class="text-muted font-13">Just add <code>data-on-text="Text"</code> or <code>data-off-text="Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                           <div class="m-b-30">
                              <input type="checkbox" checked data-on-color="danger" data-off-color="success" data-on-text="Radio">
                              <input type="checkbox" checked data-on-color="success" data-off-color="danger" data-off-text="Waves">
                           </div>

                           <h4>With HTML</h4>
                           <p class="text-muted font-13">Just add <code>data-on-text="HTML Text"</code> & <code>data-off-text="HTML Text"</code> to the <code>&lt;input type="checkbox"...&gt;</code>.</p>
                           <div class="m-b-30">
                              <input type="checkbox" checked data-on-color="primary" data-off-color="info" data-on-text="<i class='fa fa-sun-o'></i>" data-off-text="<i class='fa fa-cloud'></i>">
                              <input type="checkbox" checked data-on-color="info" data-off-color="success" data-on-text="<i class='fa fa-phone'></i>" data-off-text="<i class='fa fa-envelope'></i>">
                           </div>

                           <h4>Radio Buttons</h4>
                           <p class="text-muted font-13">Just add class <code>radio-switch</code> to the <code>&lt;input type="radio"...&gt;</code>. If you want to change the class name, you have to change jquery according to that.</p>
                           <div class="m-b-30">
                              <div class="form-group">
                                 <label for="option1">Option 1</label>
                                 <input id="option1" type="radio" name="radiobt" value="option1" class="radio-switch"> 
                              </div>
                              <div class="form-group">
                                 <label for="option2">Option 2</label>
                                 <input id="option2" type="radio" name="radiobt" value="option2" class="radio-switch"> 
                              </div>
                              <div class="form-group">
                                 <label for="option3">Option 3</label>
                                 <input id="option3" type="radio" name="radiobt" value="option3" class="radio-switch"> 
                              </div>
                           </div>
                        </div>
                   </div>
               </div>   
            </div>
            <!-- /.row -->
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
    <!-- bt-switch -->
    <script src="../plugins/bower_components/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript">
       $(".bt-switch input[type='checkbox'], .bt-switch input[type='radio']").bootstrapSwitch();
       var radioswitch = function() {
          var bt = function() {
             $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioState")
             }), 
             $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck")
             }), 
             $(".radio-switch").on("switch-change", function() {
                $(".radio-switch").bootstrapSwitch("toggleRadioStateAllowUncheck", !1)
             })
          };
          return {
             init: function() {
                bt()
             }
          }
       }();
       $(document).ready(function() {
          radioswitch.init()
       });
    </script>
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