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
    <!-- Footable CSS -->
    <link href="../plugins/bower_components/footable/css/footable.core.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
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
                    <h4 class="page-title">Foo Tables</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Row Toggler</h3>
                        <p class="text-muted m-b-20">Create your table with Toggle Footable</p>
                        <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                            <thead>
                                <tr>
                                    <th data-toggle="true"> First Name </th>
                                    <th> Last Name </th>
                                    <th data-hide="phone"> Job Title </th>
                                    <th data-hide="all"> DOB </th>
                                    <th data-hide="all"> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
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
                        <h3 class="box-title m-b-0">Accordion Footable</h3>
                        <p class="text-muted m-b-20">Create your table with Accordion Footable </p>
                        <table id="demo-foo-accordion" class="table m-b-0 toggle-arrow-tiny">
                            <thead>
                                <tr>
                                    <th data-toggle="true"> First Name </th>
                                    <th> Last Name </th>
                                    <th data-hide="phone"> Job Title </th>
                                    <th data-hide="all"> DOB </th>
                                    <th data-hide="all"> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
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
                        <h3 class="box-title m-b-0">Pagination Footable</h3>
                        <p class="text-muted m-b-20">Create your table with Paginated Footable </p>
                        <label class="form-inline">Show
                            <select id="demo-show-entries" class="form-control input-sm">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select> entries </label>
                        <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny" data-page-size="5">
                            <thead>
                                <tr>
                                    <th data-toggle="true"> First Name </th>
                                    <th> Last Name </th>
                                    <th data-hide="phone"> Job Title </th>
                                    <th data-hide="all"> DOB </th>
                                    <th data-hide="all"> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 1972</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 1981</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 1969</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 1977</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 1991</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a></td>
                                    <td><a href="#">Business Services Sales Representative</a></td>
                                    <td>17 Oct 1987</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 1983</td>
                                    <td><span class="label label-table label-inverse">Disabled</span></td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a></td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 1961</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 1981</td>
                                    <td><span class="label label-table label-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 1985</td>
                                    <td><span class="label label-table label-danger">Suspended</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split m-t-30"> </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Add & Remove Rows</h3>
                        <p class="text-muted m-b-20">You can add or remove rows with Footable </p>
                        <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                            <thead>
                                <tr>
                                    <th data-sort-initial="true" data-toggle="true">First Name</th>
                                    <th>Last Name</th>
                                    <th data-hide="phone, tablet">Job Title</th>
                                    <th data-hide="phone, tablet">DOB</th>
                                    <th data-hide="phone, tablet">Status</th>
                                    <th data-sort-ignore="true" class="min-width">Delete</th>
                                </tr>
                            </thead>
                            <div class="form-inline padding-bottom-15">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button id="demo-btn-addrow" class="btn btn-outline btn-primary btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>Add New Row</button> <small>New row will be added in last page.</small> </div>
                                    </div>
                                    <div class="col-sm-6 text-right m-b-20">
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off"> </div>
                                    </div>
                                </div>
                            </div>
                            <tbody>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td>Airline Transport Pilot</td>
                                    <td>3 Oct 2017</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td>Goodlow</td>
                                    <td>Technical Services Librarian</td>
                                    <td>1 Nov 2014</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Isidra</td>
                                    <td>Boudreaux</td>
                                    <td>Traffic Court Referee</td>
                                    <td>22 Jun 2014</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Doris</td>
                                    <td>Michael</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 2013</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 2014</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2017</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 2014</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 2013</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 2013</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 2014</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2017</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td>11 Nov 2014</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td>23 Jun 2013</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td>19 Apr 2013</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td>15 Nov 2014</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 2014</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2017</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maria</td>
                                    <td>Tangeli</td>
                                    <td>Drywall Stripper</td>
                                    <td>21 May 2014</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2017</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td>13 Dec 2014</td>
                                    <td><span class="label label-table label-success">Active</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td>30 Dec 2017</td>
                                    <td><span class="label label-table label-danger">Suspended</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="text-right">
                                            <ul class="pagination"> </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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
    <!-- Footable -->
    <script src="../plugins/bower_components/footable/js/footable.all.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="js/footable-init.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>