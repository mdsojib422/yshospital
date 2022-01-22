<?php 
require_once "functions.php"; 
require_once "inc/auth/Session.php";
Session::init(); 
if(getPageUrl() == "index.php"){
    if(Session::checkLogin() == false){      
        header("Location: yslogin.php");
    }
    if(isset($_GET['action']) && $_GET['action'] == 'logout')
    {
        Session::destroy();
    }
}


?>
<!doctype html>
<html lang="en">
<head>
<title>:: YS Hospital :: Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?= assets_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" href="<?= assets_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?> ">

<link rel="stylesheet" href="<?= assets_url("assets/vendor/chartist/css/chartist.min.css"); ?>">
<link rel="stylesheet" href="<?= assets_url("assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css"); ?>">
<link rel="stylesheet" href="<?= assets_url("assets/vendor/toastr/toastr.min.css"); ?>">



<!-- MAIN CSS -->
<link rel="stylesheet" href="<?= assets_url("assets/css/main.css");?>">
<link rel="stylesheet" href="<?= assets_url('assets/css/chatapp.css'); ?>">
<link rel="stylesheet" href="<?= assets_url("assets/css/color_skins.css");?>">
</head>
<body class="theme-cyan">

<!-- Page Loader -->
<div class="page-loader-wrapper">
<div class="loader">
<div class="m-t-30"><img src="<?= assets_url('assets/images/logo-icon.svg'); ?>" width="48" height="48" alt="Lucid"></div>
<p>Please wait...</p>        
</div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">
<nav class="navbar navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar-btn">
        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
    </div>

    <div class="navbar-brand">
        <a href="index.html"><img src="<?= assets_url('assets/images/logo.svg'); ?>" alt="Lucid Logo" class="img-responsive logo"></a>                
    </div>
    
    <div class="navbar-right">
        <form id="navbar-search" class="navbar-form search-form">
            <input value="" class="form-control" placeholder="Search here..." type="text">
            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
        </form>                

        <div id="navbar-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="doctor-events.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
                </li>
                <li>
                    <a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="icon-bell"></i>
                        <span class="notification-dot"></span>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li class="header"><strong>You have 4 new Notifications</strong></li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="icon-info text-warning"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                        <span class="timestamp">10:00 AM Today</span>
                                    </div>
                                </div>
                            </a>
                        </li>                               
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="icon-like text-success"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                        <span class="timestamp">11:30 AM Today</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                            <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="icon-pie-chart text-info"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                        <span class="timestamp">04:00 PM Today</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="icon-info text-danger"></i>
                                    </div>
                                    <div class="media-body">
                                        <p class="text">Error on website analytics configurations</p>
                                        <span class="timestamp">Yesterday</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?action=logout" class="icon-menu"><i class="icon-login"></i>
                
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</nav>

<div id="left-sidebar" class="sidebar">
<div class="sidebar-scroll">
    <div class="user-account">
<img src="<?= assets_url('assets/images/user.png'); ?>" class="rounded-circle user-photo" alt="User Profile Picture">
        <div class="dropdown">
            <span>Welcome,</span>
            <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Dr. Chandler Bing</strong></a>
            <ul class="dropdown-menu dropdown-menu-right account">
                <li><a href="pages/doctor-profile.php"><i class="icon-user"></i>My Profile</a></li>
                <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                <li class="divider"></li>
                <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
            </ul>
        </div>
        <hr>
        <ul class="row list-unstyled">
            <li class="col-4">
                <small>Exp</small>
                <h6>14</h6>
            </li>
            <li class="col-4">
                <small>Awards</small>
                <h6>13</h6>
            </li>
            <li class="col-4">
                <small>Clients</small>
                <h6>213</h6>
            </li>
        </ul>
    </div>
    <!-- Nav tabs -->
<ul class="nav nav-tabs">
<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>             
</ul>
<!-- Tab panes -->
<div class="tab-content p-l-0 p-r-0">
<div class="tab-pane active" id="menu">
<nav class="sidebar-nav">
    <ul class="main-menu metismenu">
        <li class="active">
            <a href="<?= assets_url('index.php'); ?>">
                <i class="icon-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?= assets_url('pages/appointment.php'); ?>">
                <i class="icon-calendar"></i>
                Appointment
            </a>
        </li>
        <li><a href="<?= assets_url('pages/chat.php'); ?>"><i class="icon-bubbles"></i>Chat App</a></li>
        <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-user-follow"></i><span>Doctors</span> </a>
            <ul>
                <li><a href="doctors-all.html">All Doctors</a></li>
                <li><a href="doctor-add.html">Add Doctor</a></li>
                <li><a href="doctor-profile.html">Doctor Profile</a></li>
                <li><a href="doctor-events.html">Doctor Schedule</a></li>
            </ul>
</li>
<li><a href="javascript:void(0);" class="has-arrow"><i class="icon-user"></i><span>Patients</span> </a>
<ul>
<li><a href="patients-all.html">All Patients</a></li>
<li><a href="patient-add.html">Add Patient</a></li>
<li><a href="patient-profile.html">Patient Profile</a></li>
<li><a href="patient-invoice.html">Invoice</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" class="has-arrow"><i class="icon-wallet"></i><span>Payments</span> </a>
<ul>
<li><a href="payments.html">Payments</a></li>
<li><a href="payments-add.html">Add Payment</a></li>
<li><a href="payments-invoice.html">Invoice</a></li>
</ul>
</li>
<li><a href="javascript:void(0);" class="has-arrow"><i class="icon-layers"></i><span>Departments</span> </a>
<ul>
<li><a href="depa-add.html">Add</a></li>
<li><a href="depa-all.html">All Departments</a></li>

</ul>
</li>

<li><a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
<ul>
    <li><a href="page-login.html">Login</a></li>
    <li><a href="page-register.html">Register</a></li>
    <li><a href="page-lockscreen.html">Lockscreen</a></li>
    <li><a href="page-forgot-password.html">Forgot Password</a></li>
    <li><a href="page-404.html">Page 404</a></li>

</ul>
</li>
</ul>
</nav>
</div>
<div class="tab-pane p-l-15 p-r-15" id="Chat">
<form>
<div class="input-group m-b-20">
<div class="input-group-prepend">
    <span class="input-group-text" ><i class="icon-magnifier"></i></span>
</div>
<input type="text" class="form-control" placeholder="Search...">
</div>
</form>
<ul class="right_chat list-unstyled">
<li class="online">
<a href="javascript:void(0);">
    <div class="media">
        <img class="media-object " src="<?= assets_url('assets/images/xs/avatar4.jpg'); ?>" alt="">
        <div class="media-body">
            <span class="name">Dr. Chris Fox</span>
            <span class="message">Dentist</span>
            <span class="badge badge-outline status"></span>
        </div>
    </div>
</a>                            
</li>                     
</ul>
</div>            
</div>          
</div>
</div>