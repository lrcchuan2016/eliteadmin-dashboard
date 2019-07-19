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
                    <h4 class="page-title">Documentation Page</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Introduction</h3>
                        <p>Elite Admin is a popular open source WebApp template for admin dashboards and control panels. It is a responsive HTML template that is based on the CSS framework Bootstrap 3.3.6 It utilizes all of the Bootstrap components in its design and re-styles many commonly used plugins to create a consistent design that can be used as a user interface for backend applications. Elite Admin is based on a modular design, which allows it to be easily customized and built upon. This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
                        <hr>
                        <h3 class="box-title">Installation Guide</h3> First of all, choose you desire folder & copy that folder and also copy that plugins folder.
                        <br/>
                        <br/> example : <i class="fa fa-folder text-warning"></i> <strong>eliteadmin-inverse-php</strong> + <i class="fa fa-folder text-warning"></i> <strong>plugins (Required)</strong> + <i class="fa fa-folder text-warning"></i> <strong>email-template</strong> (this is optional if you want to use Email template then put otherwise not) <strong>= Enjoy your demo.</strong>
                        <p class="m-t-10">Note : This demo will run only on either localhost or server.
                            <ul>
                                <li>If you are using XAMPP, place your theme folder inside <code>htdocs/</code> directory.</li>
                                <li>If you are using WAMP, place your theme folder inside <code>www/</code> directory.</li>
                                <li>If you are using LIVE SERVER, place your theme folder inside <code>public_html/</code> directory.</li>
                            </ul>
                        </p>
                        <hr>
                        <h3 class="box-title">Template Structure</h3>
                        <p>All template files have fixed structure consisting of <code>.navbar-header</code>, <code>.sidebar</code> <code>.page-wrapper</code>, <code>.mega-dropdown-menu</code>, <code>.footer</code></p> <img src="../plugins/images/docs/template-structure.jpg" class="img-responsive" />
                        <hr>
                        <h3 class="box-title">Folder Structure</h3>
                        <div class="col-md-4"><img src="../plugins/images/folder-structure1.jpg" class="img-responsive" /></div><img src="../plugins/images/folder-structure2.jpg" class="img-responsive" />
                        <hr>
                        <h3 class="box-title">Begining of page</h3>
                        <p>Below code is used at the beginning of all HTML pages</p> <pre class="prettyprint">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"&gt;
	&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
	&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
	&lt;meta name="description" content=""&gt;
	&lt;meta name="author" content=""&gt;
	&lt;link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png"&gt;
	&lt;title&gt;Elite Admin - is a responsive admin template&lt;/title&gt;
	
	&lt;!-- Bootstrap Core CSS --&gt;
	&lt;link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"&gt;
	
	&lt;!-- Menu CSS --&gt;
	&lt;link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet"&gt;
	
	&lt;!-- animation CSS --&gt;
	&lt;link href="css/animate.css" rel="stylesheet"&gt;
	
	&lt;!-- Custom CSS --&gt;
	&lt;link href="css/style.css" rel="stylesheet"&gt;
	
	&lt;!-- color CSS --&gt;
	&lt;link href="css/colors/default.css" id="theme"  rel="stylesheet"&gt;
	
	&lt;!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --&gt;
	&lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;
	&lt;!--[if lt IE 9]&gt;
	    &lt;script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"&gt;&lt;/script&gt;
	    &lt;script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"&gt;&lt;/script&gt;
	&lt;![endif]--&gt;
&lt;/head&gt;
            </pre>
                        <hr>
                        <h3 class="box-title">PHP File Inclusion</h3>
                        <p>Below code is used for including header.php, left-sidebar.php and other php files which are in the <code>php/</code> directory.</p> <pre class="prettyprint">&lt;?php
    include 'php/header.php';
    include 'php/left-sidebar.php';
    include 'php/breadcrumbs.php';
?&gt;</pre>
                        <hr>
                        <h3 class="box-title">Preloader (Spinner) (in <code>php/header.php</code>)</h3>
                        <p>Below code is used for loading spinner for the template</p> <pre class="prettyprint"> &lt;!-- Preloader --&gt;
&lt;div class="preloader"&gt;
  &lt;div class="cssload-speeding-wheel"&gt;&lt;/div&gt;
&lt;/div&gt;</pre>
                        <hr> <img src="../plugins/images/elite-header.jpg" class="img-responsive" />
                        <h3 class="box-title m-t-10">Logo (in <code>php/header.php</code>)</h3>
                        <p>You can find below code in <code>header.php</code> file and it is used for (eliteadmin-inverse-php) logo. you can change it by text or image or icon, if your image height is bigger then 60px, you need to resize your logo or give height="60" to your logo image.</p> <pre class="prettyprint">
&lt;!-- Logo --&gt;
	&lt;a class="logo" href="index.html"&gt;
		&lt;!-- Logo icon image, you can use font-icon also --&gt;

		&lt;b&gt;
		&lt;!--This is dark logo icon--&gt;
		&lt;img src="../plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /&gt;

		&lt;!--This is light logo icon--&gt;
		&lt;img src="../plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /&gt; &lt;/b&gt;

		&lt;!-- Logo text image you can use text also --&gt;
		&lt;span class="hidden-xs"&gt;

		&lt;!--This is dark logo text--&gt;
		&lt;img src="../plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /&gt;

		&lt;!--This is light logo text--&gt;
		&lt;img src="../plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /&gt; &lt;/span&gt; 
	&lt;/a&gt;
            	
            </pre>
                        <hr>
                        <h3 class="box-title">Left Sidebar menu</h3>
                        <p>Below code is used for left sidebar menu and you can find this code in <code>left-sidebar.php</code> file. </p>
                        <div class="row">
                            <div class="col-md-8 col-sm-8"><pre class="prettyprint">
	    &lt;!-- Left navbar-header --&gt;
	         &lt;div class="navbar-default sidebar" role="navigation"&gt;
	            &lt;div class="sidebar-nav navbar-collapse slimscrollsidebar"&gt;
	               &lt;!-- .User Profile --&gt; 
	               &lt;div class="user-profile"&gt;
	                  &lt;div class="dropdown user-pro-body"&gt;
	                     &lt;div&gt;&lt;img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"&gt;&lt;/div&gt;
	                     &lt;a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"&gt;Steave Gection &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
	                     &lt;ul class="dropdown-menu animated flipInY"&gt;
	                        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="ti-user"&gt;&lt;/i&gt; My Profile&lt;/a&gt;&lt;/li&gt;
	                        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="ti-wallet"&gt;&lt;/i&gt; My Balance&lt;/a&gt;&lt;/li&gt;
	                        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="ti-email"&gt;&lt;/i&gt; Inbox&lt;/a&gt;&lt;/li&gt;
	                        &lt;li role="separator" class="divider"&gt;&lt;/li&gt;
	                        &lt;li&gt;&lt;a href="#"&gt;&lt;i class="ti-settings"&gt;&lt;/i&gt; Account Setting&lt;/a&gt;&lt;/li&gt;
	                        &lt;li role="separator" class="divider"&gt;&lt;/li&gt;
	                        &lt;li&gt;&lt;a href="login.html"&gt;&lt;i class="fa fa-power-off"&gt;&lt;/i&gt; Logout&lt;/a&gt;&lt;/li&gt;
	                     &lt;/ul&gt;
	                  &lt;/div&gt;
	               &lt;/div&gt;
	               &lt;!-- .User Profile --&gt; 
	               &lt;ul class="nav" id="side-menu"&gt;
	                  &lt;li class="sidebar-search hidden-sm hidden-md hidden-lg"&gt;
	                     &lt;!-- / Search input-group this is only view in mobile--&gt;
	                     &lt;div class="input-group custom-search-form"&gt;
	                        &lt;input type="text" class="form-control" placeholder="Search..."&gt;
	                        &lt;span class="input-group-btn"&gt;
	                        &lt;button class="btn btn-default" type="button"&gt; &lt;i class="fa fa-search"&gt;&lt;/i&gt; &lt;/button&gt;
	                        &lt;/span&gt; 
	                     &lt;/div&gt;
	                     &lt;!-- /input-group --&gt;
	                  &lt;/li&gt;
	                  
	         &lt;!-- From here to the end of the page, there are links of the various pages included in the demo. Just keep the links you want and remove the others. --&gt;
	         &lt;!-- Left navbar-header end --&gt;
    </pre> </div>
                            <div class="col-md-4 col-sm-4"><img src="../plugins/images/elite-l-sdebar.jpg" alt="sidebar" /></div>
                        </div>
                        <hr>
                        <h3 class="box-title">Page content</h3>
                        <p>Below code is used for content.</p> <pre class="prettyprint">
&lt;!-- Page Content --&gt;
         &lt;div id="page-wrapper"&gt;
            &lt;div class="container-fluid"&gt;
               &lt;div class="row bg-title"&gt;
                  &lt;!-- .page title --&gt;
                  &lt;div class="col-lg-3 col-md-4 col-sm-4 col-xs-12"&gt;
                     &lt;h4 class="page-title"&gt;Starter Page&lt;/h4&gt;
                  &lt;/div&gt;
                  &lt;!-- /.page title --&gt;
                  &lt;!-- .breadcrumb --&gt;
                  &lt;div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"&gt;
                    &lt;?php echo breadcrumbs(); ?&gt;
                  &lt;/div&gt;
                  &lt;!-- /.breadcrumb --&gt;
               &lt;/div&gt;
               &lt;!-- .Your content row --&gt;
               &lt;div class="row"&gt;
                  &lt;div class="col-md-12"&gt;
                     &lt;div class="white-box"&gt;
                        &lt;h3 class="box-title"&gt;Blank Starter page&lt;/h3&gt;
                     &lt;/div&gt;
                  &lt;/div&gt;
               &lt;/div&gt;
               &lt;!-- /.Your content row --&gt;
               
            &lt;/div&gt;
            &lt;!-- /.container-fluid --&gt;
            
         &lt;/div&gt;
         &lt;!-- /#page-wrapper --&gt;
</pre>
                        <hr>
                        <h3 class="box-title">Right sidebar</h3>
                        <p>Below code is used for right sidebar in all pages and you can find this code in <code>right-sidebar.php</code> file.</p> <pre class="prettyprint">
&lt;!-- .right-sidebar --&gt;
    &lt;div class="right-sidebar"&gt;
        &lt;div class="slimscrollright"&gt;
            &lt;div class="rpanel-title"&gt; Service Panel &lt;span&gt;&lt;i class="ti-close right-side-toggle"&gt;&lt;/i&gt;&lt;/span&gt; &lt;/div&gt;
        &lt;div class="r-panel-body"&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;!-- /.right-sidebar --&gt;</pre>
                        <hr>
                        <h3 class="box-title">Footer</h3>
                        <p>Below code is used for footer in all pages and you can find this code in <code>footer.php</code> file.</p> <pre class="prettyprint">&lt;footer class="footer text-center"&gt; 2017 &copy; Elite Admin brought to you by themedesigner.in &lt;/footer&gt;
                        </pre>
                        <hr>
                        <h3 class="box-title">Theme setting in (custom.js)</h3>
                        <p>Below js code is used for theme setting , fix header , fix sidebar , toggle sidebar and right sidebar open close.</p> <pre class="prettyprint">
 // Theme settings
    //Open-Close-right sidebar
    $(".right-side-toggle").click(function () {
        $(".right-sidebar").slideDown(50);
        $(".right-sidebar").toggleClass("shw-rside");
        // Fix header
        $(".fxhdr").click(function () {
            $("body").toggleClass("fix-header");
        });
        // Fix sidebar
        $(".fxsdr").click(function () {
            $("body").toggleClass("fix-sidebar");
        });
        // Service panel js
        if ($("body").hasClass("fix-header")) {
            $('.fxhdr').attr('checked', true);
        }
        else {
            $('.fxhdr').attr('checked', false);
        }
        if ($("body").hasClass("fix-sidebar")) {
            $('.fxsdr').attr('checked', true);
        }
        else {
            $('.fxsdr').attr('checked', false);
        }
    });
</pre>
                        <hr>
                        <h3 class="box-title">Custom js for sidebar navigation on window resize and set min height to page wrapper</h3>
                        <p>Below js code is used for sidebar open close, changing view in all device code and toggle sidebar.</p> <pre class="prettyprint">
//Loads the correct sidebar on window load,
    //collapses the sidebar on window resize.
    // Sets the min-height of #page-wrapper to window size
    $(function () {
        $(window).bind("load resize", function () {
            topOffset = 60;
            width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
            if (width < 768) {
                $('div.navbar-collapse').addClass('collapse');
                topOffset = 100; // 2-row-menu
            }
            else {
                $('div.navbar-collapse').removeClass('collapse');
            }
            height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
            height = height - topOffset;
            if (height < 1) height = 1;
            if (height > topOffset) {
                $("#page-wrapper").css("min-height", (height) + "px");
            }
        });
        var url = window.location;
        var element = $('ul.nav a').filter(function () {
            return this.href == url || url.href.indexOf(this.href) == 0;
        }).addClass('active').parent().parent().addClass('in').parent();
        if (element.is('li')) {
            element.addClass('active');
        }
    });
</pre>
                        <hr>
                        <h3>Font family</h3>
                        <p>Change the font family of whole template by simply change the google font link, just change in variable.less file</p> <pre class="prettyprint">
@import url(https://fonts.googleapis.com/css?family=Poppins:400,500,300,600,700);
@basefont1:'Poppins', sans-serif;;
</pre>
                        <hr>
                        <h3>Css</h3>
                        <p>We made five different less files for customization.</p> <pre class="prettyprint">
variable.less (this less include all variables of the template)
eliteadmin.less (this less include all general elements)
pages.less( this less include for the different pages)
widget.less( this less include for the core apps of the pages)
responsive.less( this less include for responsive layout of the template)
</pre>
                        <div class="alert alert-info"> Note: we recomonded you to please make your one own css and one own js files and add that in your page, so whenever the update of eliteadmin comes it does not affect your code. </div>
                        <hr>
                        <h3>Horizontal menu</h3>
                        <p>for horizontal menu we have made two demos on with the box layout and one with the fullwidth layout</p>
                        <hr>
                        <h3>Starter kit page ( Create new page )</h3>
                        <p>You can start your project with starter-page.html , in that page all the unnecessary script and html code is removed, so you can start with the new page.</p>
                        <hr>
                        <h3>Helper Classes</h3>
                        <p>we make classes to help you in your developement process, and make it fast. checkout the below link for the helper classes</p> <a href="../eliteadmin-inverse/utility-classes.html" target="_blank" class="btn btn-success btn-rounded">click for the Utility Classes</a>
                        <hr>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title" id="structure">Structure</h3> <pre>
                <p>
                  HTML
                  ├── 
                  │   └── Eliteadmin/
                  │       └── Css
                  │            └── All Css files
                  │       └── Js
                  │            └── All Js files
                  │       └── Less
                  │            └── All Less files
                  │       └── Bootstrap
                  │            └── Bootstrap 3.3.6 files
                  │       └── All Html Pages
                  │
                  │   └── Plugins/
                  │       └── bower_component
                  │            └── All Required plugins files
                  │       └── Images
                  │             └── All Theme Images
                  └── 
                </p>
              </pre> </div>
                </div>
            </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title" id="html">Html Structure</h3> <pre class="prettyprint">
               
               &lt;body&gt;

                    <span style="color:#ccc;">&lt;!-- Preloader --&gt;</span>
                    &lt;div class="preloader"&gt;
                    &lt;div class="cssload-speeding-wheel"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                     <span style="color:#ccc;">&lt;!-- End Preloader --&gt;</span>

                   <span style="color:#ccc;">&lt;!-- Wrapper --&gt;</span>
                  &lt;div id="wrapper"&gt;

                   <span style="color:#ccc;">&lt;!-- Top Section --&gt;</span>
                  &lt;nav class="navbar navbar-default navbar-static-top"&gt;

                     <span style="color:#ccc;">&lt;!-- Your Logo --&gt;</span>
                    &lt;div class="top-left-part"&gt;
                      &lt;a href="index.html" class="logo"&gt; ... &lt;/a&gt; 
                    &lt;/div&gt;
                     <span style="color:#ccc;">&lt;!-- End Your Logo --&gt;</span>
                  &lt;/nav&gt;
                   <span style="color:#ccc;">&lt;!-- Top Section End --&gt;</span>

                   <span style="color:#ccc;">&lt;!-- Left Navigation --&gt;</span>
                  &lt;div class="navbar-default sidebar slimscroll"&gt; &lt;/div&gt;
                   <span style="color:#ccc;">&lt;!-- Left Navigation End --&gt;</span>


                   <span style="color:#ccc;">&lt;!-- Main Content --&gt;</span>
                  
                     <span style="color:#ccc;">&lt;!-- Start Page wrapper --&gt;</span>
                    &lt;div class="page-wrapper"&gt;
                       <span style="color:#ccc;">&lt;!-- Start Container --&gt;</span>
                      &lt;div class="container-fluid"&gt; ... &lt;/div&gt;
                       <span style="color:#ccc;">&lt;!-- End container --&gt;</span>
                    &lt;/div&gt;
                     <span style="color:#ccc;">&lt;!-- End Page wrapper --&gt;</span>
                    
                     <span style="color:#ccc;">&lt;!-- footer --&gt;</span>
                    &lt;footer class="footer text-center"&gt; 2017 © Eliteadmin brought to you by themedesigner.in &lt;/footer&gt;
                     <span style="color:#ccc;">&lt;!-- End footer --&gt;</span>
                    
                    
                 

                  &lt;/div&gt;
                   <span style="color:#ccc;">&lt;!-- End Wrapper --&gt;</span>

                  &lt;/body&gt;
                  &lt;/html&gt;

              </pre> </div>
                </div>
            </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title" id="colors">For Colors</h3> Just replce the
                        <br/>
                        <br/> &lt;!-- color CSS --&gt;
                        <br/> &lt;link href="css/colors/default.css" id="theme" rel="stylesheet"&gt;
                        <br/>
                        <br/> &lt;link href="css/colors/green.css" id="theme" rel="stylesheet"&gt;
                        <br/>
                        <br/> &lt;link href="css/colors/gray.css" id="theme" rel="stylesheet"&gt;
                        <br/>
                        <br/> &lt;link href="css/colors/blue.css" id="theme" rel="stylesheet"&gt;
                        <br/>
                        <br/> &lt;link href="css/colors/purple.css" id="theme" rel="stylesheet"&gt;
                        <br/>
                        <br/> &lt;link href="css/colors/megna.css" id="theme" rel="stylesheet"&gt;
                        <h3 class="box-title m-t-40" id="colors">For Layout</h3> just use following code to get desire layout
                        <br/>
                        <br/> For Get <b>fixed header</b> put this <code>.fix-header</code> class to the body tag.
                        <br/>
                        <br/> For Get <b>fixed sidebar</b> put this <code>.fix-sidebar</code> class to the body tag.
                        <br/>
                        <br/> Thats it!!! </div>
                </div>
            </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title" id="less">Less - Css</h3>
                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th style="width: 20%;">File</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>bootstrap.css</code> </td>
                                    <td> I use the bootstrap v3.3.6. you can update bootstrapversion any time </td>
                                </tr>
                                <tr>
                                    <td><code>spinners.css</code>/<code>spinners.css</code> </td>
                                    <td> This file is has preloader css. </td>
                                </tr>
                                <tr>
                                    <td><code>eliteadmin.less</code>/<code>eliteadmin.css</code> </td>
                                    <td> This file is has all the classes for the template. </td>
                                </tr>
                                <tr>
                                    <td><code>variable.less</code>/<code>variable.css</code> </td>
                                    <td> This file is has all the predefine classes for the template. </td>
                                </tr>
                                <tr>
                                    <td><code>sidebar-nav.less</code>/<code>sidebar-nav.css</code> </td>
                                    <td> this file content sidebar-nav for css. </td>
                                </tr>
                                <tr>
                                    <td><code>widgets.less</code>/<code>widgets.css</code> </td>
                                    <td> This file contains the styles for all the components, ui elements, and some other parts of the theme. </td>
                                </tr>
                                <tr>
                                    <td><code>responsive.less</code>/<code>responsive.css</code> </td>
                                    <td> This file is containing the styles related to responsiveness support. </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title" id="js">Js Files</h3>
                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">File</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>jquery.js</code>, <code>bootstrap.js</code>, <code>jquery.slimscroll</code> </td>
                                    <td> These files are used at main files of the theme. and nicescroll is for sidebarscroll </td>
                                </tr>
                                <tr>
                                    <td><code>custom.js</code> </td>
                                    <td> This is a main function js file. it contain sidebar and other basic js</td>
                                </tr>
                                <tr>
                                    <td><code>sidebar-nav.js</code> </td>
                                    <td> This file contains sidebarnavigation js</td>
                                </tr>
                                <tr>
                                    <td><code>wave.js</code> </td>
                                    <td> This is for wave effects on buttons and other elements</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title" id="creadit">Creadits</h3>
                        <ul class="common">
                            <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
                            <li><a href="https://jquery.com/">Jquery</a></li>
                            <li><a href="http://fortawesome.github.io/Font-Awesome/">Font-Awesome</a></li>
                            <li><a href="http://tristanedwards.me/sweetalert">Sweet-Alert</a></li>
                            <li><a href="http://dbushell.com/">Nestable</a></li>
                            <li><a href="http://areaaperta.com/nicescroll/">Nicescroll</a></li>
                            <li><a href="http://arshaw.com/fullcalendar/">Full Calendar</a></li>
                            <li><a href="http://jqueryvalidation.org/">Form Validator</a></li>
                            <li><a href="http://jdewit.github.com/bootstrap-timepicker">Bootstrap-timepicker</a></li>
                            <li><a href="http://www.eyecon.ro/bootstrap-colorpicker">Bootstrap Colorpicker</a></li>
                            <li><a href="http://loudev.com/">Multi-select</a></li>
                            <li><a href="https://select2.github.io/">Select2</a></li>
                            <li><a href="https://github.com/xing/wysihtml5">Wysihtml5</a></li>
                            <li><a href="https://www.datatables.net">Datatables</a></li>
                            <li><a href="http://morrisjs.github.io/morris.js/">Morris</a></li>
                            <li><a href="http://chartjs.org/">Chartjs</a></li>
                            <li><a href="http://omnipotent.net/jquery.sparkline/">Sparkline</a> </li>
                            <li><a href="https://hpneo.github.io/gmaps/">Gmaps</a></li>
                            <li><a href="http://jqvmap.com">Vector Maps</a></li>
                            <li><a href="https://pexels.com/">Pexels (images)</a></li>
                            <li><a href="http://www.flotcharts.org/">Flot-charts</a></li>
                            <li><a href="https://github.com/dixso/custombox"> Custombox</a></li>
                            <li><a href="http://owlgraphic.com/owlcarousel/"> Owl carousel</a></li>
                            <li><a href="https://themify.me/themify-icons">Themify-icons</a></li>
                            <li><a href="https://erikflowers.github.io/weather-icons/"> Weather icons</a></li>
                            <li><a href="https://github.com/abpetkov/switchery"> Switchery</a></li>
                            <li><a href="https://github.com/silviomoreto/bootstrap-select"> Bootstrap select</a></li>
                            <li><a href="http://www.tinymce.com/">Wysiwig Editor</a></li>
                            <li><a href="https://github.com/wenzhixin/bootstrap-table-examples"> Bootstrap tables</a></li>
                            <li><a href="https://gionkunz.github.io/chartist-js/"> Chartist chart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!--row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title" id="support">Support</h3>
                        <p>If you need any help or feel any query don't hasitate just mail me (with licence key) on niravjoshi87@gmail.com, iwould love to help you, Once again thanks for the purchasing myadmin template, i hope you enjoy it. Thanks</p>
                    </div>
                </div>
            </div>
            <!--/row-->
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
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?autoload=true&amp;lang=css" defer="defer"></script>
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