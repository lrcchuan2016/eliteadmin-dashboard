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
    <!-- Popup CSS -->
    <link href="../plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
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
                    <h4 class="page-title">Starter Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <!-- .col -->
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Single image lightbox</h3> <code>&lt;a class="image-popup-no-margins" href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code>
                        <div class="row m-t-30">
                            <div class="col-sm-4">
                                <a class="image-popup-vertical-fit" href="../plugins/images/big/img1.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../plugins/images/big/img1.jpg" class="img-responsive" /> </a> <small>Fits horizontally and vertically</small> </div>
                            <div class="col-sm-4">
                                <a class="image-popup-fit-width" href="../plugins/images/big/img2.jpg" title="This image fits only horizontally."> <img src="../plugins/images/big/img2.jpg" class="img-responsive" /> </a> <small>Only horizontally</small> </div>
                            <div class="col-sm-4">
                                <a class="image-popup-no-margins" href="../plugins/images/big/img3.jpg"> <img src="../plugins/images/big/img3.jpg" class="img-responsive" /> </a> <small>Zoom animation, close on top-right.</small> </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <!-- .col -->
                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Lightbox gallery</h3> <code>&lt;a href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code>
                        <div class="popup-gallery m-t-30">
                            <a href="../plugins/images/big/img5.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../plugins/images/big/img5.jpg" width="32.5%" /> </a>
                            <a href="../plugins/images/big/img6.jpg" title="This image fits only horizontally."> <img src="../plugins/images/big/img6.jpg" width="32.5%" /> </a>
                            <a href="../plugins/images/big/img4.jpg"> <img src="../plugins/images/big/img4.jpg" width="32.5%" /> </a>
                        </div> <small>just add code under class="popup-gallery".</small> </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <!-- .col -->
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-4">
                                <h3 class="box-title m-b-0">Zoom-gallery</h3>
                                <div class="zoom-gallery m-t-30">
                                    <a href="../plugins/images/big/img5.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="../plugins/images/big/img5.jpg" width="32.5%" /> </a>
                                    <a href="../plugins/images/big/img6.jpg" title="This image fits only horizontally."> <img src="../plugins/images/big/img6.jpg" width="32.5%" /> </a>
                                    <a href="../plugins/images/big/img4.jpg"> <img src="../plugins/images/big/img4.jpg" width="32.5%" /> </a>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                <h3 class="box-title m-b-0">Popup with Youtube Video</h3> <small>You can use youtube video with popup just add class <code>popup-youtube</code></small>
                                <br/>
                                <br/> <a class="popup-youtube btn btn-danger" href="www.youtube.com/watch?v=sK7riqg2mr4">Open YouTube video</a>
                                <br> </div>
                            <div class="col-sm-3">
                                <h3 class="box-title m-b-0">Google map</h3> <small>You can use Googlemap with popup just add class with <code>popup-gmaps</code></small>
                                <br/>
                                <br/> <a class="popup-gmaps btn btn-info" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a> </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <!-- .col -->
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Css Animation</h3>
                        <div id="image-popups" class="row">
                            <div class="col-sm-2">
                                <a href="../plugins/images/big/img1.jpg" data-effect="mfp-zoom-in"><img src="../plugins/images/big/img1.jpg" class="img-responsive" />
                                    <br/>Zoom</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="../plugins/images/big/img2.jpg" data-effect="mfp-newspaper"><img src="../plugins/images/big/img2.jpg" class="img-responsive" />
                                    <br/>Newspaper</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="../plugins/images/big/img3.jpg" data-effect="mfp-move-horizontal"><img src="../plugins/images/big/img3.jpg" class="img-responsive" />
                                    <br/>Horizontal move</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="../plugins/images/big/img4.jpg" data-effect="mfp-move-from-top"><img src="../plugins/images/big/img4.jpg" class="img-responsive" />
                                    <br/>Move from top</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="../plugins/images/big/img5.jpg" data-effect="mfp-3d-unfold"><img src="../plugins/images/big/img5.jpg" class="img-responsive" />
                                    <br/>3d unfold</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="../plugins/images/big/img6.jpg" data-effect="mfp-zoom-out"><img src="../plugins/images/big/img5.jpg" class="img-responsive" />
                                    <br/>Zoom-out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <!-- .col -->
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Form Popup</h3> <a class="popup-with-form btn btn-success" href="#test-form">Open form</a>
                        <!-- form itself -->
                        <form id="test-form" class="mfp-hide white-popup-block">
                            <h1>Form</h1>
                            <fieldset style="border:0;">
                                <p>Lightbox has an option to automatically focus on the first input. It's strongly recommended to use <code>inline</code> popup type for lightboxes with form instead of <code>ajax</code> (to keep entered data if the user accidentally refreshed the page).</p>
                                <div class="form-group">
                                    <label class="control-label" for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required=""> </div>
                                <div class="form-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@domain.com" required=""> </div>
                                <div class="form-group">
                                    <label class="control-label" for="inputPhone">Phone</label>
                                    <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Eg. +447500000000" required=""> </div>
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Textarea</label>
                                    <br>
                                    <textarea class="form-control" id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- .col -->
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
    <!-- Magnific popup JavaScript -->
    <script src="../plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="../plugins/bower_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
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