<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="all">

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="assets/jui/css/jquery-ui.css" media="screen">
<link rel="stylesheet" href="assets/jui/jquery-ui.custom.css" media="screen">
<link rel="stylesheet" href="assets/jui/timepicker/jquery-ui-timepicker.css" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="plugins/uniform/css/uniform.default.css" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel="stylesheet" href="plugins/ibutton/jquery.ibutton.css" media="screen">

<!-- Circular Stat -->
<link rel="stylesheet" href="custom-plugins/circular-stat/circular-stat.css">

<!-- Fullcalendar -->
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.css" media="screen">
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="assets/css/main-style.css" media="screen">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Dados de temperatura coletados com arduino</title>

</head>

<body data-show-sidebar-toggle-button="true" data-fixed-sidebar="false">

    <div id="wrapper">
        <!-- <header id="header" class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <div class="brand-wrap pull-left">
                        <div class="brand-img">
                            <a class="brand" href="#">
                                <img src="assets/images/logo.png" alt="" style="width: 117px; height: 21px;">
                            </a>
                        </div>
                    </div>
                    
                    <div id="header-right" class="clearfix">
                        <div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
                            <i class="icon-caret-down"></i>
                        </div>
                        <div id="header-search">
                            <span id="search-toggle" data-toggle="dropdown">
                                <i class="icon-search"></i>
                            </span>
                            <form class="navbar-search">
                                <input type="text" class="search-query" placeholder="Search">
                            </form>
                        </div>
                        <div id="dropdown-lists">
                            <div class="item-wrap">
                                <a class="item" href="#" data-toggle="dropdown">
                                    <span class="item-icon"><i class="icon-exclamation-sign"></i></span>
                                    <span class="item-label">Notifications</span>
                                    <span class="item-count">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong> commented on your photo
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong> commented on your photo
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Billy John</strong> commented on your photo
                                                        <span class="time">43 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">View all notifications</a></li>
                                </ul>
                            </div>
                            <div class="item-wrap">
                                <a class="item" href="#" data-toggle="dropdown">
                                    <span class="item-icon"><i class="icon-envelope"></i></span>
                                    <span class="item-label">Messages</span>
                                    <span class="item-count">16</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item-wrap">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>John Doe</strong><br> Hello, do you have time to go out tomorrow?
                                                        <span class="time">13 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Jane Roe</strong><br> Hey, the reports said that you were...
                                                        <span class="time">27 minutes ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="thumbnail"><img src="assets/images/pp.jpg" alt=""></span>
                                                    <span class="details">
                                                        <strong>Billy John</strong><br> Can I borrow your new camera for taking...
                                                        <span class="time">About an hour ago</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="mail.html">View all messages</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div id="header-functions" class="pull-right">
                            <div id="user-info" class="clearfix">
                                <span class="info">
                                    Welcome
                                    <span class="name">Shana-chan</span>
                                </span>
                                <div class="avatar">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                        <img src="assets/images/pp.jpg" alt="Avatar">
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="profile.html"><i class="icol-user"></i> My Profile</a></li>
                                        <li><a href="#"><i class="icol-layout"></i> My Invoices</a></li>                                        
                                        <li class="divider"></li>
                                        <li><a href="index.html"><i class="icol-key"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="logout-ribbon">
                                <a href="index.html"><i class="icon-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> -->
        
        <div id="content-wrap">
            <div id="content">
                <div id="content-outer">
                    <div id="content-inner">
                        <!-- <aside id="sidebar">
                            <nav id="navigation" class="collapse">
                                <ul>
                                    <li class="active">
                                        <span title="General">
                                            <i class="icon-home"></i>
                                            <span class="nav-title">General</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li class="active"><a href="dashboard.html"><i class="icol-dashboard"></i> Dashboard</a></li>
                                            <li><a href="../creative/dashboard.html"><i class="icol-plugin"></i> Creative Version</a></li>
                                            <li><a href="affix.html"><i class="icol-pin"></i> Fixed Sidebar</a></li>
                                            <li><a href="calendar.html"><i class="icol-calendar-2"></i> Calendar</a></li>
                                            <li><a href="icons.html"><i class="icol-lifebuoy"></i> Icons</a></li>
                                            <li><a href="grids.html"><i class="icol-grid"></i> Grids</a></li>
                                            <li><a href="typography.html"><i class="icol-font"></i> Typography</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title="Table">
                                            <i class="icon-table"></i>
                                            <span class="nav-title">Table</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="tables.html"><i class="icol-style"></i> Static Tables</a></li>
                                            <li><a href="responsive_tables.html"><i class="icol-hammer-screwdriver"></i> Responsive Tables</a></li>
                                            <li><a href="data_tables.html"><i class="icol-table"></i> Data Tables</a></li>
                                            <li><a href="detail_view.html"><i class="icol-eye"></i> Detail View Table</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title="Statistic">
                                            <i class="icon-graph"></i>
                                            <span class="nav-title">Statistic</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="statistic.html"><i class="icol-chart-curve"></i> Statistical Elements</a></li>
                                            <li><a href="charts_gallery.html"><i class="icol-chart-pie"></i> Charts Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title="Form">
                                            <i class="icon-list"></i>
                                            <span class="nav-title">Form</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="form_layouts.html"><i class="icol-layout-select"></i> Form Layouts</a></li>
                                            <li><a href="form_elements.html"><i class="icol-ui-text-field-password"></i> Form Elements</a></li>
                                            <li><a href="form_wizard.html"><i class="icol-wand"></i> Form Wizard</a></li>
                                            <li><a href="form_validation.html"><i class="icol-accept"></i> Form Validation</a></li>
                                            <li><a href="form_cloning.html"><i class="icol-asterisk-orange"></i> Form Cloning</a></li>
                                            <li><a href="wysiwyg.html"><i class="icol-pencil"></i> WYSIWYG</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title="Elements">
                                            <i class="icon-cogs"></i>
                                            <span class="nav-title">Elements</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="ui_bootstrap.html"><i class="icol-ui-tab-content"></i> Bootstrap Elements</a></li>
                                            <li><a href="ui_components.html"><i class="icol-pipette"></i> Other Elements</a></li>
                                            <li><a href="alerts.html"><i class="icol-error"></i> Alerts and Notifications</a></li>
                                            <li><a href="boxes.html"><i class="icol-cog"></i> Widget Boxes</a></li>
                                            <li><a href="buttons.html"><i class="icol-joystick"></i> Buttons</a></li>
                                            <li><a href="file_uploader.html"><i class="icol-computer"></i> File Uploader</a></li>
                                            <li><a href="file_manager.html"><i class="icol-databases"></i> File Manager</a>
                                        </ul>
                                    </li>
                                    <li>
                                        <span title="Extra">
                                            <i class="icon-gift"></i>
                                            <span class="nav-title">Extra</span>
                                        </span>
                                        <ul class="inner-nav">
                                            <li><a href="profile.html"><i class="icol-user"></i> Profile Page</a></li>
                                            <li><a href="mail.html"><i class="icol-email"></i> Mail Page</a></li>
                                            <li><a href="invoice.html"><i class="icol-blog"></i> Invoice Page</a></li>
                                            <li><a href="widgets.html"><i class="icol-ruby"></i> Custom Widgets</a></li>
                                            <li><a href="gallery.html"><i class="icol-images"></i> Image Gallery</a>
                                            <li><a href="contacts.html"><i class="icol-vcard"></i> Contact List</a></li>
                                            <li><a href="404.html"><i class="icol-error"></i> Error Page (404)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </aside>
 -->
                        <!-- <div id="sidebar-separator"></div> -->
                        
                        <section id="main" class="clearfix">
                            <div id="main-header" class="page-header">
                                <!-- <ul class="breadcrumb">
                                    <li>
                                        <i class="icon-home"></i>MoonCake
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard</a>
                                    </li>
                                </ul> -->
                                
                                <h1 id="main-heading">
                                    Dashboard <span>Dados de temperatura coletados com arduino</span>
                                </h1>
                            </div>
                            
                            <div id="main-content">
                                @section('conteudo')
                                    xxx
                                @show
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>     
    </div>

    <!-- Core Scripts -->
    <script src="assets/js/libs/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/jquery.placeholder.min.js"></script>
    <script src="assets/js/libs/jquery.mousewheel.min.js"></script>
    
    <!-- Template Script -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/setup.js"></script>

    <!-- Customizer, remove if not needed -->
    <script src="assets/js/customizer.js"></script>

    <!-- Uniform Script -->
    <script src="plugins/uniform/jquery.uniform.min.js"></script>
    
    <!-- jquery-ui Scripts -->
    <script src="assets/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="assets/jui/jquery-ui.custom.min.js"></script>
    <script src="assets/jui/timepicker/jquery-ui-timepicker.min.js"></script>
    <script src="assets/jui/jquery.ui.touch-punch.min.js"></script>
    
    <!-- Plugin Scripts -->
    
    <!-- Flot -->
    <!--[if lt IE 9]>
    <script src="assets/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="plugins/flot/jquery.flot.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.time.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="plugins/flot/plugins/jquery.flot.resize.min.js"></script>

    <!-- Circular Stat -->
    <script src="custom-plugins/circular-stat/circular-stat.min.js"></script>

    <!-- SparkLine -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    
    <!-- iButton -->
    <script src="plugins/ibutton/jquery.ibutton.min.js"></script>

    <!-- Full Calendar -->
    <script src="plugins/fullcalendar/fullcalendar.min.js"></script>
    
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/TableTools/js/TableTools.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js"></script>
    
    <!-- Demo Scripts -->
    <script src="assets/js/demo/dashboard.js"></script>
    <script src="assets/js/json2.js"></script>

</body>

</html>
