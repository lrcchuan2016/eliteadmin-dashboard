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
                    <h4 class="page-title">Grid</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--.row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Grid options</h3>
                        <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
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
                                        <th>Grid behavior</th>
                                        <td>Horizontal at all times</td>
                                        <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
                                    </tr>
                                    <tr>
                                        <th>Max container width</th>
                                        <td>None (auto)</td>
                                        <td>750px</td>
                                        <td>970px</td>
                                        <td>1170px</td>
                                    </tr>
                                    <tr>
                                        <th>Class prefix</th>
                                        <td><code>.col-xs-</code> </td>
                                        <td><code>.col-sm-</code> </td>
                                        <td><code>.col-md-</code> </td>
                                        <td><code>.col-lg-</code> </td>
                                    </tr>
                                    <tr>
                                        <th># of columns</th>
                                        <td colspan="4">12</td>
                                    </tr>
                                    <tr>
                                        <th>Max column width</th>
                                        <td class="text-muted">Auto</td>
                                        <td>60px</td>
                                        <td>78px</td>
                                        <td>95px</td>
                                    </tr>
                                    <tr>
                                        <th>Gutter width</th>
                                        <td colspan="4">30px (15px on each side of a column)</td>
                                    </tr>
                                    <tr>
                                        <th>Nestable</th>
                                        <td colspan="4">Yes</td>
                                    </tr>
                                    <tr>
                                        <th>Offsets</th>
                                        <td colspan="4">Yes</td>
                                    </tr>
                                    <tr>
                                        <th>Column ordering</th>
                                        <td colspan="4">Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</p>
                    </div>
                </div>
            </div>
            <!--/.row-->
            <!--.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title">Example: Stacked-to-horizontal</h3>
                        <p>Using a single set of <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
                        <div class="row show-grid">
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                            <div class="col-md-1">.col-md-1</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-md-8">.col-md-8</div>
                            <div class="col-md-4">.col-md-4</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4">.col-md-4</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-md-6">.col-md-6</div>
                            <div class="col-md-6">.col-md-6</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
            <!--.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title">Example: Mobile and desktop</h3>
                        <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
                        <div class="row show-grid">
                            <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-xs-6">.col-xs-6</div>
                            <div class="col-xs-6">.col-xs-6</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
            <!--.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title">Example: Mobile, tablet, desktops</h3>
                        <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
                        <div class="row show-grid">
                            <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                            <!-- Optional: clear the XS cols if their content doesn't match in height -->
                            <div class="clearfix visible-xs"></div>
                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
            <!--.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title">Responsive column resets</h3>
                        <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our responsive utility classes.</p>
                        <div class="row show-grid">
                            <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
                                <br> Resize your viewport or check it out on your phone for an example. </div>
                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                            <!-- Add the extra clearfix for only the required viewport -->
                            <div class="clearfix visible-xs"></div>
                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
            <!--.row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title">Offsetting columns</h3>
                        <p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four columns.</p>
                        <div class="row show-grid">
                            <div class="col-md-4">.col-md-4</div>
                            <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                        </div>
                        <div class="row show-grid">
                            <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
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