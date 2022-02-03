<!doctype html>
<html>

<!-- Mirrored from www.lab.westilian.com/westilo-admin/fixed-width-view/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jan 2022 06:33:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title><?= $titre ?></title>
    <link type="text/css" rel="stylesheet" href="Assets/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/animate.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/layout.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/components.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/widgets.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/pages.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/common.css">
    <link type="text/css" rel="stylesheet" href="Assets/css/responsive.css">
    <link rel="shortcut icon" href="Assets/images/logos/logo-removebg.png" type="image/x-icon">
</head>

<body class="overlay-leftbar">
    <!--Topbar Start Here-->
    <header class="topbar clearfix">
        <!--Top Search Bar Start Here-->
        <div class="top-search-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-input-addon">
                            <span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
                            <input type="text" class="form-control top-search-input" placeholder="Faire une recherche">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Top Search Bar End Here-->
        <!--Topbar Left Branding With Logo Start-->
        <div class="topbar-left pull-left">
            <div class="clearfix">
                <ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                    <li>
                        <div class="logo">
                            <a href="index.php?action=acceuil"><img src="Assets/images/logos/logo-large-removebg.png" class="img-fluid" height="55" alt="logo"></a>
                        </div>
                    </li>
                </ul>
                <!--Mobile Search and Rightbar Toggle-->
                <ul class="branding-right pull-right">
                    <li><a href="#" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search"></i></a></li>
                    <li><a href="#" class="btn-mobile-bar"><i class="zmdi zmdi-menu"></i></a></li>
                </ul>
            </div>
        </div>
        <!--Topbar Left Branding With Logo End-->
        <!--Topbar Right Start-->
        <div class="topbar-right pull-right">
            <div class="clearfix">
                <!--Mobile View Leftbar Toggle-->
                <ul class="left-bar-switch pull-left">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
                </ul>
                <ul class="pull-right top-right-icons">
                    <li><a href="#" class="btn-top-search"><i class="zmdi zmdi-search"></i></a></li>

                    <li class="dropdown notifications-dropdown">
                        <a href="#" class="btn-notification dropdown-toggle" data-toggle="dropdown"><span class="noty-bubble">2</span><i class="zmdi zmdi-globe"></i></a>
                        <div class="dropdown-menu notifications-tabs">
                            <div>
                                <ul class="nav material-tabs nav-tabs" role="tablist">
                                    <!--<li class="active"><a href="#message" aria-controls="message" role="tab" data-toggle="tab">Message</a></li>-->
                                    <li><a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab">Notifications</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="notifications">
                                        <div class="notification-wrap">
                                            <h4>Vous avez 2 nouvelle(s) notifications</h4>
                                            <ul>
                                                <li>
                                                    <a href="#" class="clearfix">
                                                        <span class="ni w_bg_purple">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span>
                                                        <span class="notification-message">
                                                            Votre requete a ete acceptee.
                                                            <span class="notification-time clearfix">3 Min plus tard </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="clearfix">
                                                        <span class="ni w_bg_orange">
                                                            <i class="fa fa-life-ring"></i>
                                                        </span>
                                                        <span class="notification-message">
                                                            Nulla commodo sem at purus.
                                                            <span class="notification-time clearfix">1 Heure plus tard</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Topbar Right End-->
    </header>