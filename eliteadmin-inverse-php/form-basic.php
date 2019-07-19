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
                    <h4 class="page-title">Notifications</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Default Basic Forms</h3>
            <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
            <form class="form">
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Text</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Search</label>
                    <div class="col-10">
                        <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-url-input" class="col-2 col-form-label">URL</label>
                    <div class="col-10">
                        <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                    <div class="col-10">
                        <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-password-input" class="col-2 col-form-label">Password</label>
                    <div class="col-10">
                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-number-input" class="col-2 col-form-label">Number</label>
                    <div class="col-10">
                        <input class="form-control" type="number" value="42" id="example-number-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                    <div class="col-10">
                        <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Date</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-month-input" class="col-2 col-form-label">Month</label>
                    <div class="col-10">
                        <input class="form-control" type="month" value="2011-08" id="example-month-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-week-input" class="col-2 col-form-label">Week</label>
                    <div class="col-10">
                        <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-2 col-form-label">Time</label>
                    <div class="col-10">
                        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Color</label>
                    <div class="col-10">
                        <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Default Basic Forms</h3>
            <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-12">Default Text <span class="help"> e.g. "George deo"</span></label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" value="George deo...">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                    <div class="col-md-12">
                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Password</label>
                    <div class="col-md-12">
                        <input type="password" class="form-control" value="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Placeholder</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="placeholder">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Text area</label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Read only input</label>
                    <div class="col-md-12">
                        <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <fieldset disabled>
                        <label for="disabledTextInput" class="col-md-12">Disabled input</label>
                        <div class="col-md-12">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                        </div>
                    </fieldset>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <div class="form-check has-success">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="checkboxSuccess" value="option1"> Checkbox with success
                            </label>
                        </div>
                        <div class="form-check has-warning">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="checkboxWarning" value="option1"> Checkbox with warning
                            </label>
                        </div>
                        <div class="form-check has-danger">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="checkboxDanger" value="option1"> Checkbox with danger
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Check this custom checkbox</span>
                            </label>
                        </div>
                        <div class="form-check bd-example-indeterminate">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Check this custom checkbox</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Check this custom checkbox</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <label class="custom-control custom-radio">
                                <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Toggle this custom radio</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="custom-control custom-radio">
                                <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Or toggle this other custom radio</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Input Select</label>
                    <div class="col-sm-12">
                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">File upload</label>
                    <div class="col-sm-12">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput">
                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                <span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn btn-default btn-file"> 
                        <span class="fileinput-new">Select file</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="...">
                            </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Default Fileinput</label>
                    <div class="col-sm-12">
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input">
                            <span class="custom-file-control"></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Helping text</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" placeholder="Helping text">
                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Input groups</h3>
            <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">@example.com</span>
                        </div>
                        <br>
                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-addon">.00</span>
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <span class="input-group-addon">0.00</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <!-- form-group -->
                    </form>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <form>
                        <label class="control-label m-t-20" for="example-input1-group2">Checkboxes and radio addons</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                          <input type="checkbox" aria-label="Checkbox for following text input">
                        </span>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                          <input type="radio" aria-label="Radio button for following text input">
                        </span>
                                    <input type="text" class="form-control" aria-label="Text input with radio button">
                                </div>
                            </div>
                        </div>
                        <label class="control-label m-t-20" for="example-input1-group2">Multiple addons</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                          <input type="checkbox" aria-label="Checkbox for following text input">
                        </span>
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <span class="input-group-addon">0.00</span>
                                    <input type="text" class="form-control" aria-label="Text input with radio button">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <form>
                        <label class="control-label m-t-20" for="example-input1-group2">Button addons</label>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                          <button class="btn btn-info" type="button">Go!</button>
                        </span>
                                    <input type="text" class="form-control" placeholder="Search for...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                          <button class="btn btn-info" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <span class="input-group-btn">
                          <button class="btn btn-danger" type="button">Hate it</button>
                        </span>
                                    <input type="text" class="form-control" placeholder="Product name">
                                    <span class="input-group-btn">
                          <button class="btn btn-success" type="button">Love it</button>
                        </span>
                                </div>
                            </div>
                        </div>
                        <!-- form-group -->
                    </form>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <label class="control-label m-t-20" for="example-input1-group2">Multiple addons</label>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Input States</h3>
            <p class="text-muted m-b-30 font-13"> Validation styles for error, warning, and success states on form controls.</p>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <form class="form-horizontal row" role="form">
                        <div class="col-12">
                            <div class="form-group has-success">
                                <label class="form-control-label" for="inputSuccess1">Input with success</label>
                                <input type="text" class="form-control form-control-success" id="inputSuccess1">
                                <div class="form-control-feedback">Success! You've done it.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                            <div class="form-group has-warning">
                                <label class="form-control-label" for="inputWarning1">Input with warning</label>
                                <input type="text" class="form-control form-control-warning" id="inputWarning1">
                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                            <div class="form-group has-danger">
                                <label class="form-control-label" for="inputDanger1">Input with danger</label>
                                <input type="text" class="form-control form-control-danger" id="inputDanger1">
                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" role="form">
                        <div class="form-group row has-success">
                            <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                <div class="form-control-feedback">Success! You've done it.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                        <div class="form-group row has-warning">
                            <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                        <div class="form-group row has-danger">
                            <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                <small class="form-text text-muted">Example help text that remains unchanged.</small>
                            </div>
                        </div>
                    </form>
                    </form>
                </div>
                <div class="col-sm-5 offset-sm-1 col-xs-12">
                    <form role="form" class="form-horizontal row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="col-sm-3 form-control-label" for="example-input-small">Small</label>
                                <div class="col-sm-6">
                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 form-control-label" for="example-input-normal">Normal</label>
                                <div class="col-sm-6">
                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 form-control-label" for="example-input-large">Large</label>
                                <div class="col-sm-6">
                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 form-control-label">Grid Sizes</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder=".col-sm-4">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-5 col-sm-offset-3">
                                    <input type="text" class="form-control" placeholder=".col-sm-5">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="text" class="form-control" placeholder=".col-sm-6">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Sample Basic Forms</h3>
            <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1"> Remember me </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Sample Horizontal form</h3>
            <p class="text-muted m-b-30 font-13"> Use Bootstrap's predefined grid classes for horizontal form </p>
            <form class="form-horizontal">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 control-label col-form-label">Username*</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 control-label col-form-label">Email*</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 control-label col-form-label">Website</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Website">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 control-label col-form-label">Password*</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword4" class="col-sm-3 control-label col-form-label">Re Password*</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-9">
                        <div class="checkbox checkbox-success">
                            <input id="checkbox33" type="checkbox">
                            <label for="checkbox33">Check me out !</label>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Sign in</button>
                    </div>
                </div>
            </form>
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
    <script src="js/jasny-bootstrap.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>