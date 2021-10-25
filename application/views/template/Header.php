<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?=$title?></title>
    <!-- Favicon icon -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="<?=base_url()?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">



</head>

<body>

<!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?=base_url()?>assets/1831710055.png" alt="">
                <p class="logo-compact">Arsip Surat</p>
                <p class="brand-title">Arsip Surat</p>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a href="<?=base_url()?>C_Arsip/index" aria-expanded="false"><i
                                class="icon icon-form"></i><span
                                class="nav-text">Arsip</span></a></li>
                    <li><a href="<?=base_url()?>C_Arsip/About" aria-expanded="false"><i class="mdi mdi-account"></i><span
                                class="nav-text">About</span></a></li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->