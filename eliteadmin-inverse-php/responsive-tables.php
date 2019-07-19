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
    <link href="../plugins/bower_components/tablesaw-master/dist/tablesaw.css" rel="stylesheet">
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
                    <h4 class="page-title">Responsive Table</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Kitchen Sink</h3>
                        <p class="text-muted m-b-20">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</p>
                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                            <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Avatar</a></td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Titanic</a></td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">The Avengers</a></td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Harry Potter and the Deathly Hallows—Part 2</a></td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Frozen</a></td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Iron Man 3</a></td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Transformers: Dark of the Moon</a></td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">The Lord of the Rings: The Return of the King</a></td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Skyfall</a></td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Transformers: Age of Extinction</a></td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Column Toggle Table</h3>
                        <p class="text-muted m-b-20">The Column Toggle Table allows the user to select which columns they want to be visible.</p>
                        <table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
                            <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Avatar</a></td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Titanic</a></td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">The Avengers</a></td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Harry Potter and the Deathly Hallows—Part 2</a></td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Frozen</a></td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Iron Man 3</a></td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Transformers: Dark of the Moon</a></td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">The Lord of the Rings: The Return of the King</a></td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Skyfall</a></td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Transformers: Age of Extinction</a></td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Swipe Table</h3>
                        <p class="text-muted m-b-20">The Column Swipe Table allows the user to select which columns they want to be visible.</p>
                        <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe">
                            <thead>
                                <tr>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Movie Title</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Rank</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Year</th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Rating</abbr></th>
                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Gross</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Avatar</a></td>
                                    <td>1</td>
                                    <td>2009</td>
                                    <td>83%</td>
                                    <td>$2.7B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Titanic</a></td>
                                    <td>2</td>
                                    <td>1997</td>
                                    <td>88%</td>
                                    <td>$2.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">The Avengers</a></td>
                                    <td>3</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.5B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Harry Potter and the Deathly Hallows—Part 2</a></td>
                                    <td>4</td>
                                    <td>2011</td>
                                    <td>96%</td>
                                    <td>$1.3B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Frozen</a></td>
                                    <td>5</td>
                                    <td>2013</td>
                                    <td>89%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Iron Man 3</a></td>
                                    <td>6</td>
                                    <td>2013</td>
                                    <td>78%</td>
                                    <td>$1.2B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Transformers: Dark of the Moon</a></td>
                                    <td>7</td>
                                    <td>2011</td>
                                    <td>36%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">The Lord of the Rings: The Return of the King</a></td>
                                    <td>8</td>
                                    <td>2003</td>
                                    <td>95%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Skyfall</a></td>
                                    <td>9</td>
                                    <td>2012</td>
                                    <td>92%</td>
                                    <td>$1.1B</td>
                                </tr>
                                <tr>
                                    <td class="title"><a href="javascript:void(0)">Transformers: Age of Extinction</a></td>
                                    <td>10</td>
                                    <td>2014</td>
                                    <td>18%</td>
                                    <td>$1.0B</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
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
    <!-- jQuery peity -->
    <script src="../plugins/bower_components/tablesaw-master/dist/tablesaw.js"></script>
    <script src="../plugins/bower_components/tablesaw-master/dist/tablesaw-init.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>