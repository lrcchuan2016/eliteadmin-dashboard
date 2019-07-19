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
    <link rel="stylesheet" type="text/css" href="../plugins/bower_components/gallery/css/animated-masonry-gallery.css" />
    <link rel="stylesheet" type="text/css" href="../plugins/bower_components/fancybox/ekko-lightbox.min.css" />
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
                    <h4 class="page-title">Gallery page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Gallery Page</h3>
                        <div id="gallery">
                            <div id="gallery-header">
                                <div id="gallery-header-center">
                                    <div id="gallery-header-center-left">
                                        <div class="gallery-header-center-right-links" id="filter-all">All</div>
                                        <div class="gallery-header-center-right-links" id="filter-studio">Studio</div>
                                        <div class="gallery-header-center-right-links" id="filter-landscape">Landscapes</div>
                                    </div>
                                </div>
                            </div>
                            <div id="gallery-content">
                                <div id="gallery-content-center">
                                    <a href="../plugins/images/assets/studio1.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio1.jpg" alt="gallery" class="all studio" /> </a>
                                    <a href="../plugins/images/assets/landscape1.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape1.jpg" class="all landscape" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio2.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio2.jpg" class="all studio" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio25.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio25.jpg" class="all studio" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/landscape2.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape2.jpg" class="all landscape" alt="gallery" /></a>
                                    <a href="../plugins/images/assets/studio27.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio27.jpg" class="all studio" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio3.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio3.jpg" class="all studio" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/landscape3.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape3.jpg" class="all landscape" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio26.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio26.jpg" class="all studio" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio4.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio4.jpg" class="all studio" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/landscape4.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape4.jpg" class="all landscape" alt="gallery" /></a>
                                    <a href="../plugins/images/assets/studio5.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio5.jpg" class="all studio" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/landscape5.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape5.jpg" class="all landscape" alt="gallery" /></a>
                                    <a href="../plugins/images/assets/studio6.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio6.jpg" class="all studio" alt="gallery" /></a>
                                    <a href="../plugins/images/assets/landscape6.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape6.jpg" class="all landscape" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio7.jpg" class="all studio" alt="gallery" /></a>
                                    <a href="../plugins/images/assets/landscape7.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape7.jpg" class="all landscape" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio8.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio8.jpg" class="all studio" alt="gallery" /></a>
                                    <a href="../plugins/images/assets/landscape8.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape8.jpg" class="all landscape" alt="gallery" /> </a>
                                    <a href="../plugins/images/assets/studio9.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio9.jpg" class="all studio" alt="gallery" />
                                        <a href="../plugins/images/assets/landscape9.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape9.jpg" class="all landscape" alt="gallery" /> </a>
                                        <a href="../plugins/images/assets/studio10.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio10.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape10.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape10.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio11.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio11.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape11.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape11.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio12.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio12.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape12.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape12.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio13.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio13.jpg" class="all studio" alt="gallery" /> </a>
                                        <a href="../plugins/images/assets/landscape13.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape13.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio14.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio14.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape14.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape14.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio15.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio15.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape15.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape15.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio16.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio16.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape16.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape16.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio17.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio17.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape17.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape17.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio18.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio18.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/landscape18.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/landscape18.jpg" class="all landscape" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio19.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio19.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio20.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio20.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio21.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio21.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio22.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio22.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio23.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio23.jpg" class="all studio" alt="gallery" /></a>
                                        <a href="../plugins/images/assets/studio24.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="../plugins/images/assets/studio24.jpg" class="all studio" alt="gallery" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- .row -->
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
    <script type="text/javascript" src="../plugins/bower_components/gallery/js/animated-masonry-gallery.js"></script>
    <script type="text/javascript" src="../plugins/bower_components/gallery/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="../plugins/bower_components/fancybox/ekko-lightbox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function ($) {
            // delegate calls to data-toggle="lightbox"
            $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function (event) {
                event.preventDefault();
                return $(this).ekkoLightbox({
                    onShown: function () {
                        if (window.console) {
                            return console.log('Checking our the events huh?');
                        }
                    }
                    , onNavigate: function (direction, itemIndex) {
                        if (window.console) {
                            return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                        }
                    }
                });
            });
            //Programatically call
            $('#open-image').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            $('#open-youtube').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            // navigateTo
            $(document).delegate('*[data-gallery="navigateTo"]', 'click', function (event) {
                event.preventDefault();
                var lb;
                return $(this).ekkoLightbox({
                    onShown: function () {
                        lb = this;
                        $(lb.modal_content).on('click', '.modal-footer a', function (e) {
                            e.preventDefault();
                            lb.navigateTo(2);
                        });
                    }
                });
            });
        });
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>