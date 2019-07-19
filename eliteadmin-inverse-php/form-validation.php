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
                    <h4 class="page-title">Validation Forms Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Form Validation</h3>
            <p class="text-muted m-b-30"> Bootstrap Form Validation</p>
            <form data-toggle="validator">
                <div class="form-group">
                    <label for="inputName1" class="control-label">Name</label>
                    <input type="text" class="form-control" id="inputName1" placeholder="Cina Saffary" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="textarea" class="control-label">Text area</label>
                    <textarea id="textarea" class="form-control" required></textarea>
                    <span class="help-block with-errors">Hey look, this one has feedback icons!</span> </div>
                <div class="form-group">
                    <label for="inputPassword" class="control-label">Password</label>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                            <span class="help-block">Minimum of 6 characters</span> </div>
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="radio">
                        <input type="radio" name="underwear" id="out" required>
                        <label for="out"> Boxers </label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="underwear" id="in" required>
                        <label for="in"> Briefs </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                        <label for="terms"> Check yourself </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Form Validation</h3>
            <p class="text-muted m-b-30"> Bootstrap Form Validation</p>
            <form data-toggle="validator">
                <div class="form-group">
                    <label for="inputName" class="control-label">Name</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail2" class="control-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail2" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="inputPassword2" class="control-label">Password</label>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword2" placeholder="Password" required>
                            <span class="help-block">Minimum of 6 characters</span> </div>
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" id="inputPasswordConfirm2" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <input type="checkbox" id="terms2" data-error="Before you wreck yourself" required>
                        <label for="terms"> Remember Me?</label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Horizontal Form Validation</h3>
            <p class="text-muted m-b-30"> Bootstrap Form Validation </p>
            <form data-toggle="validator" class="form-horizontal">
                <div class="form-group row">
                    <label for="inputName4" class="control-label col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputName4" placeholder="Cina Saffary" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail4" class="control-label col-sm-3">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword4" class="control-label col-sm-3">Password</label>
                    <div class="col-sm-4">
                        <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword4" placeholder="Password" required>
                        <span class="help-block">Minimum of 6 characters</span> </div>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="inputPasswordConfirm4" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3"></label>
                    <div class="checkbox">
                        <div class="col-sm-9">
                            <input type="checkbox" id="terms4" data-error="Before you wreck yourself" required>
                            <label for="terms4"> Remember Me?</label>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
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
    <script src="js/validator.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>