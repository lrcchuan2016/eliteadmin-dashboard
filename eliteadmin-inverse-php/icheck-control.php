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
    <link href="../plugins/bower_components/icheck/skins/all.css" rel="stylesheet">
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
            <h4 class="page-title">Icheck Form Controls</h4>
            </div>
            <!-- /.page title -->
            <!-- .breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <a href="https://themeforest.net/item/elite-admin-the-ultimate-dashboard-web-app-kit-material-design/16750820?ref=suniljoshi" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Icheck Controls</li>
            </ol>
            </div>
            <!-- /.breadcrumb -->
            </div>
            <!-- .row -->
            <div class="row">
               <div class="col-xs-12 col-md-6">
                  <div class="white-box">
                     <h3 class="box-title">Icheck Minimal Controls (minimal skin)</h3>
                     <div class="skin skin-minimal">
                        <form>
                           <div class="form-group">
                              <label>Colors</label>
                              <div class="input-group">
                                 <ul class="icolors">
                                      <li></li>
                                      <li class="red active"></li>
                                      <li class="green"></li>
                                      <li class="blue"></li>
                                      <li class="orange"></li>
                                      <li class="yellow"></li>
                                      <li class="purple"></li>
                                    </ul>
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Checkbox &amp; Radio List</label>
                              <div class="input-group">
                                 <ul class="icheck-list">
                                    <li>
                                       <input type="checkbox" class="check" id="minimal-checkbox-1">
                                       <label for="minimal-checkbox-1">Checkbox 1</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                                       <label for="minimal-checkbox-2">Checkbox 2</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="minimal-checkbox-disabled" disabled>
                                       <label for="minimal-checkbox-disabled">Disabled</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="minimal-checkbox-disabled-checked" checked disabled>
                                       <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
                                    </li>
                                 </ul>
                                 <ul class="icheck-list">
                                    <li>
                                       <input tabindex="7" type="radio" class="check" id="minimal-radio-1" name="minimal-radio">
                                       <label for="minimal-radio-1">Radio button 1</label>
                                    </li>
                                    <li>
                                       <input tabindex="8" type="radio" class="check" id="minimal-radio-2" name="minimal-radio" checked>
                                       <label for="minimal-radio-2">Radio button 2</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="minimal-radio-disabled" disabled>
                                       <label for="minimal-radio-disabled">Disabled</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="minimal-radio-disabled-checked" checked disabled>
                                       <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>   
               </div>

               <div class="col-xs-12 col-md-6">
                  <div class="white-box">
                     <h3 class="box-title">Icheck Flat Controls (flat skin)</h3>
                     <div class="skin skin-flat">
                        <form>
                           <div class="form-group">
                              <label>Colors</label>
                              <div class="input-group">
                                 <ul class="icolors">
                                      <li></li>
                                      <li class="red active"></li>
                                      <li class="green"></li>
                                      <li class="blue"></li>
                                      <li class="orange"></li>
                                      <li class="yellow"></li>
                                      <li class="purple"></li>
                                    </ul>
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Checkbox &amp; Radio List</label>
                              <div class="input-group">
                                 <ul class="icheck-list">
                                    <li>
                                       <input type="checkbox" class="check" id="flat-checkbox-1" data-checkbox="icheckbox_flat-red">
                                       <label for="flat-checkbox-1">Checkbox 1</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="flat-checkbox-2" checked data-checkbox="icheckbox_flat-red">
                                       <label for="flat-checkbox-2">Checkbox 2</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="flat-checkbox-disabled" disabled data-checkbox="icheckbox_flat-red">
                                       <label for="flat-checkbox-disabled">Disabled</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="flat-checkbox-disabled-checked" checked disabled data-checkbox="icheckbox_flat-red">
                                       <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                                    </li>
                                 </ul>
                                 <ul class="icheck-list">
                                    <li>
                                       <input type="radio" class="check" id="flat-radio-1" name="flat-radio" data-radio="iradio_flat-red">
                                       <label for="flat-radio-1">Radio button 1</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="flat-radio-2" name="flat-radio" checked data-radio="iradio_flat-red">
                                       <label for="flat-radio-2">Radio button 2</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="flat-radio-disabled" disabled data-radio="iradio_flat-red">
                                       <label for="flat-radio-disabled">Disabled</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="flat-radio-disabled-checked" checked disabled data-radio="iradio_flat-red">
                                       <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>   
               </div>

               <div class="col-xs-12 col-md-6">
                  <div class="white-box">
                     <h3 class="box-title">Icheck Square Controls (square skin)</h3>
                     <div class="skin skin-square">
                        <form>
                           <div class="form-group">
                              <label>Colors</label>
                              <div class="input-group">
                                 <ul class="icolors">
                                      <li></li>
                                      <li class="red active"></li>
                                      <li class="green"></li>
                                      <li class="blue"></li>
                                      <li class="orange"></li>
                                      <li class="yellow"></li>
                                      <li class="purple"></li>
                                    </ul>
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Checkbox &amp; Radio List</label>
                              <div class="input-group">
                                 <ul class="icheck-list">
                                    <li>
                                       <input type="checkbox" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red">
                                       <label for="square-checkbox-1">Checkbox 1</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="square-checkbox-2" checked data-checkbox="icheckbox_square-red">
                                       <label for="square-checkbox-2">Checkbox 2</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="square-checkbox-disabled" disabled data-checkbox="icheckbox_square-red">
                                       <label for="square-checkbox-disabled">Disabled</label>
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" id="square-checkbox-disabled-checked" checked disabled data-checkbox="icheckbox_square-red">
                                       <label for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
                                    </li>
                                 </ul>
                                 <ul class="icheck-list">
                                    <li>
                                       <input type="radio" class="check" id="square-radio-1" name="square-radio" data-radio="iradio_square-red">
                                       <label for="square-radio-1">Radio button 1</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="square-radio-2" name="square-radio" checked data-radio="iradio_square-red">
                                       <label for="square-radio-2">Radio button 2</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="square-radio-disabled" disabled data-radio="iradio_square-red">
                                       <label for="square-radio-disabled">Disabled</label>
                                    </li>
                                    <li>
                                       <input type="radio" class="check" id="square-radio-disabled-checked" checked disabled data-radio="iradio_square-red">
                                       <label for="square-radio-disabled-checked">Disabled &amp; checked</label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>   
               </div>

               <div class="col-xs-12 col-md-6">
                  <div class="white-box">
                     <h3 class="box-title">Icheck Line Controls (line skin)</h3>
                     <div class="skin skin-line">
                        <form>
                           <div class="form-group">
                              <label>Colors</label>
                              <div class="input-group">
                                 <ul class="icolors">
                                      <li></li>
                                      <li class="red active"></li>
                                      <li class="green"></li>
                                      <li class="blue"></li>
                                      <li class="orange"></li>
                                      <li class="yellow"></li>
                                      <li class="purple"></li>
                                    </ul>
                              </div>
                           </div>
                           <div class="form-group">
                              <label>Checkbox &amp; Radio List</label>
                              <div class="input-group">
                                 <ul class="icheck-list">
                                    <li>
                                       <input type="checkbox" class="check" data-checkbox="icheckbox_line-red" data-label="Checkbox 1">
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" checked data-checkbox="icheckbox_line-red" data-label="Checkbox 2">
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" disabled data-checkbox="icheckbox_line-red" data-label="Disabled">
                                    </li>
                                    <li>
                                       <input type="checkbox" class="check" checked disabled data-checkbox="icheckbox_line-red" data-label="Disabled &amp; checked">
                                    </li>
                                 </ul>
                                 <ul class="icheck-list">
                                    <li>
                                       <input type="radio" class="check" name="line-radio" data-radio="iradio_line-red" data-label="Radio button 1">
                                    </li>
                                    <li>
                                       <input type="radio" class="check" name="line-radio" checked data-radio="iradio_line-red" data-label="Radio button 2">
                                    </li>
                                    <li>
                                       <input type="radio" class="check" disabled data-radio="iradio_line-red" data-label="Disabled">
                                    </li>
                                    <li>
                                       <input type="radio" class="check" checked disabled data-radio="iradio_line-red" data-label="Disabled &amp; checked">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </form>
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
    <!-- icheck -->
    <script src="../plugins/bower_components/icheck/icheck.min.js"></script>
    <script src="../plugins/bower_components/icheck/icheck.init.js"></script>
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