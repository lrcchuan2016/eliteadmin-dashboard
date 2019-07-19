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
                    <h4 class="page-title">List & Media Object</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <!-- .row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4 p-20">
                                <h3 class="box-title">Basic example <a class="get-code" data-toggle="collapse" href="#pgr1" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h3>
                                <div class="collapse m-t-15 well" id="pgr1" aria-expanded="true"> <code>
                      &lt;ul class="list-group"&gt;<br/>
                        &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;<br/>
                        &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;<br/>
                        &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;<br/>
                        &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;<br/>
                        &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;<br/>
                      &lt;/ul&gt;</code> </div>
                                <ul class="list-group">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Morbi leo risus</li>
                                    <li class="list-group-item">Porta ac consectetur ac</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 p-20">
                                <h3 class="box-title">Linked items <a class="get-code" data-toggle="collapse" href="#pgr2" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h3>
                                <div class="collapse m-t-15 well" id="pgr2" aria-expanded="true"> <code>
                      &lt;div class="list-group"&gt;<br/>
                      &lt;a href="javascript:void(0)" class="list-group-item active"&gt;Cras justo odio&lt;/a&gt;<br/>
                      &lt;a href="javascript:void(0)" class="list-group-item"&gt;Dapibus ac facilisis in&lt;/a&gt;<br/>
                      &lt;a href="javascript:void(0)" class="list-group-item"&gt;Morbi leo risus&lt;/a&gt;<br/>
                      &lt;a href="javascript:void(0)" class="list-group-item"&gt;Porta ac consectetur ac&lt;/a&gt;<br/>
                      &lt;a href="javascript:void(0)" class="list-group-item"&gt;Vestibulum at eros&lt;/a&gt;<br/>
                    &lt;/div&gt;</code> </div>
                                <div class="list-group"> <a href="javascript:void(0)" class="list-group-item active">Cras justo odio</a> <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in</a> <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a> <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur ac</a> <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a> </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-20">
                                <h3 class="box-title">With Badges <a class="get-code" data-toggle="collapse" href="#pgr3" aria-expanded="true"><i class="fa fa-code" title="Get Code" data-toggle="tooltip"></i></a></h3>
                                <div class="collapse m-t-15 well" id="pgr3" aria-expanded="true"> <code>
                      &lt;ul class="list-group list-group-full"&gt;<br/>
                        &lt;li class="list-group-item"&gt;<br/>
                          &lt;span class="badge badge-success"&gt;6&lt;/span&gt; Cras justo odio
                        &lt;/li&gt;<br/>
                        &lt;li class="list-group-item"&gt;<br/>
                          Dapibus ac facilisis in
                        &lt;/li&gt;<br/>
                        &lt;li class="list-group-item"&gt;<br/>
                          &lt;span class="badge badge-danger"&gt;3&lt;/span&gt; Morbi leo risus
                        &lt;/li&gt;<br/>
                        &lt;li class="list-group-item active"&gt;<br/>
                          &lt;span class="badge badge-info"&gt;10&lt;/span&gt; Porta ac consectetur ac
                        &lt;/li&gt;<br/>
                        &lt;li class="list-group-item"&gt;<br/>
                          Vestibulum at eros
                        &lt;/li&gt;<br/>
                        
                      &lt;/ul&gt;</code> </div>
                                <ul class="list-group list-group-full">
                                    <li class="list-group-item"> <span class="badge badge-success">6</span> Cras justo odio </li>
                                    <li class="list-group-item"> Dapibus ac facilisis in </li>
                                    <li class="list-group-item"> <span class="badge badge-danger">3</span> Morbi leo risus </li>
                                    <li class="list-group-item active"> <span class="badge badge-info">10</span> Porta ac consectetur ac </li>
                                    <li class="list-group-item"> Vestibulum at eros </li>
                                </ul>
                            </div>
                        </div>
                        <!-- / .row -->
                        <!-- .row -->
                        <div class="row">
                            <div class="col-md-4 col-sm-4 p-20">
                                <h3 class="box-title">Button items</h3>
                                <div class="list-group">
                                    <button type="button" class="list-group-item">Cras justo odio</button>
                                    <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                                    <button type="button" class="list-group-item">Morbi leo risus</button>
                                    <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                                    <button type="button" class="list-group-item">Vestibulum at eros</button>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-20">
                                <h3 class="box-title">Disabled items</h3>
                                <div class="list-group"> <a href="javascript:void(0)" class="list-group-item disabled">
                        Cras justo odio
                      </a> <a href="javascript:void(0)" class="list-group-item">Dapibus ac facilisis in</a> <a href="javascript:void(0)" class="list-group-item">Morbi leo risus</a> <a href="javascript:void(0)" class="list-group-item">Porta ac consectetur ac</a> <a href="javascript:void(0)" class="list-group-item">Vestibulum at eros</a> </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-20">
                                <h3 class="box-title">Disabled items</h3>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                    <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                    <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                    <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                    <li class="list-group-item list-group-item-default">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
                        <!-- .row -->
                        <div class="row">
                            <div class="col-md-8 p-20">
                                <h3 class="box-title">Media Object</h3>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="javascript:void(0)"> <img alt="64x64" class="media-object" src="../plugins/images/users/varun.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="javascript:void(0)"> <img alt="64x64" class="media-object" src="../plugins/images/users/genu.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="javascript:void(0)"> <img alt="64x64" class="media-object" src="../plugins/images/users/ritesh.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Nested media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                                    <div class="media-right">
                                        <a href="javascript:void(0)"> <img alt="64x64" class="media-object" src="../plugins/images/users/salman.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="javascript:void(0)"> <img alt="64x64" class="media-object" src="../plugins/images/users/varun.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
                                    <div class="media-right">
                                        <a href="javascript:void(0)"> <img alt="64x64" class="media-object" src="../plugins/images/users/govinda.jpg" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 p-20">
                                <h3 class="box-title">Custom content</h3>
                                <div class="list-group">
                                    <a href="javascript:void(0)" class="list-group-item active">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item __web-inspector-hide-shortcut__">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. </p>
                                    </a>
                                    <a href="javascript:void(0)" class="list-group-item __web-inspector-hide-shortcut__">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                                    </a>
                                </div>
                                <h3 class="box-title m-t-40">Fancy Listing, <small>just put class to ul</small> <code>common-list</code></h3>
                                <ul class="common-list">
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Maecenas sed diam eget</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> List group item heading</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Donec id elit non mi porta gravida</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Maecenas sed diam eget</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
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
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>