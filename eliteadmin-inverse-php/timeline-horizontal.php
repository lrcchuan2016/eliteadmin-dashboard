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
    <!-- Timeline CSS -->
    <link href="../plugins/bower_components/horizontal-timeline/css/horizontal-timeline.css" rel="stylesheet">
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
                    <h4 class="page-title">Timeline</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <section class="cd-horizontal-timeline">
                            <div class="timeline">
                                <div class="events-wrapper">
                                    <div class="events">
                                        <ol>
                                            <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                                            <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                                            <li><a href="#0" data-date="20/04/2014">20 Mar</a></li>
                                            <li><a href="#0" data-date="20/05/2014">20 May</a></li>
                                            <li><a href="#0" data-date="09/07/2014">09 Jul</a></li>
                                            <li><a href="#0" data-date="30/08/2014">30 Aug</a></li>
                                            <li><a href="#0" data-date="15/09/2014">15 Sep</a></li>
                                            <li><a href="#0" data-date="01/11/2014">01 Nov</a></li>
                                            <li><a href="#0" data-date="10/12/2014">10 Dec</a></li>
                                            <li><a href="#0" data-date="19/01/2015">29 Jan</a></li>
                                            <li><a href="#0" data-date="03/03/2015">3 Mar</a></li>
                                        </ol> <span class="filling-line" aria-hidden="true"></span> </div>
                                    <!-- .events -->
                                </div>
                                <!-- .events-wrapper -->
                                <ul class="cd-timeline-navigation">
                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                    <li><a href="#0" class="next">Next</a></li>
                                </ul>
                                <!-- .cd-timeline-navigation -->
                            </div>
                            <!-- .timeline -->
                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/genu.jpg"> Horizontal Timeline<br/><small>January 16th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="28/02/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/govinda.jpg"> Horizontal Timeline<br/><small>Feb 28th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="20/04/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/salman.jpg"> Horizontal Timeline<br/><small>March 20th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="20/05/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/varun.jpg"> Horizontal Timeline<br/><small>May 20th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="09/07/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/genu.jpg"> Horizontal Timeline<br/><small>July 9th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="30/08/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/sonu.jpg"> Horizontal Timeline<br/><small>August 30th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="15/09/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/hritik.jpg"> Horizontal Timeline<br/><small>September 15th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="01/11/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/varun.jpg"> Horizontal Timeline<br/><small>November 01st, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="10/12/2014">
                                        <h2><img class="img-responsive img-circle pull-left m-r-20 m-b-10" width="60" alt="user" src="../plugins/images/users/ritesh.jpg"> Horizontal Timeline<br/><small>December 10th, 2014</small></h2>
                                        <hr class="m-t-40">
                                        <p class="m-t-40"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
                                            <button class="btn btn-info btn-rounded btn-outline m-t-20">Read more</button>
                                        </p>
                                    </li>
                                    <li data-date="19/01/2015">
                                        <h2>Event title here</h2> <em>January 19th, 2015</em>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus. </p>
                                    </li>
                                    <li data-date="03/03/2015">
                                        <h2>Event title here</h2> <em>March 3rd, 2015</em>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus. </p>
                                    </li>
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </section>
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
    <!-- Horizontal-timeline JavaScript -->
    <script src="../plugins/bower_components/horizontal-timeline/js/horizontal-timeline.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>