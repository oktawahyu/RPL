<?php
    include("koneksi.php");

    session_start();

    if( ! isset($_SESSION['login_user'])) {
        header("Location: login.php");
    }

    // cari total user
    $sql_user = "SELECT id_user FROM user";
    $result_user = mysqli_query($conn,$sql_user);
    $jumlah_user = mysqli_num_rows($result_user);

    // sql barang
    $sql_barang = "SELECT * FROM barang"; 
    $result_barang = mysqli_query($conn,$sql_barang);

    // tampil barang


?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from thevectorlab.net/codelab/dashboard-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 00:11:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
    
    <title>Home</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="left-sidebar-fixed  left-sidebar-light header-fixed header-primary-color">
    <!--header start-->
    <header class="app-header">
        <div class="branding-wrap">
            <!--left nav toggler start-->
            <a class="nav-link mt-2 float-left js_left-nav-toggler pos-fixed" href="javaScript:;">
                <i class=" ti-align-right"></i>
            </a>
            <!--left nav toggler end-->

            <!--brand start-->
            <div class="navbar-brand pos-fixed">
                <a class="text-white    " href="index.php">
                    <img src="assets/img/light-logo.png" srcset="assets/img/light-logo@2x.png 2x" alt="">
                </a>
            </div>
            <!--brand end-->
        </div>

        <!--header rightside links-->
        <ul class="header-links hide-arrow navbar">
            <li class="nav-item search-bar">
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#searchModal">
                    <i class="vl_search"></i>
                </button>
            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-thumb">
                        <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                    <div class="dropdown-item- px-3 py-2">
                        <img class="rounded-circle mr-2" src="assets/img/avatar/avatar2.jpg" width="35" alt=""/>
                        <span class="text-muted"><?php echo $_SESSION['login_user']; ?></span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Sign Out</a>
                </div>
            </li>

        </ul>
        <!--/header rightside links-->
    </header>
    <!--search modal start-->
    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--search modal start-->
    <!--header end-->

    <div class="app-body">
        <!--left sidebar start-->
        <div class="left-nav-wrap">
            <div class="left-sidebar">
                <nav class="sidebar-menu">
                    <ul id="nav-accordion">
                        <li class="nav-title">
                            <h5 class="text-uppercase">PILIH MENU</h5>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fa icon-magnifier text-danger"></i>
                                <span>Cari Barang Anda</span>
                            </a>
                        </li>

                        <li>
                            <a href="tambah.php">
                                <i class="fa icon-plus text-success"></i>
                                <span>Tambahkan Barang</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--left sidebar end-->

        <!--main content wrapper-->
        <div class="content-wrapper">

            <div class="container-fluid">

               




        <!--/main content wrapper-->

        <!--right sidebar-->
        <div class="right-sidebar" id="right_side_bar">
            <div class="card border-0">
                <div class="card-body pb-0">
                    <!--close toggle-->
                    <a href="javascript:;" class="right_side_toggle float-right close-sidebar-icon">
                        <i class=" ti-shift-right"> </i>
                    </a>
                    <!--/close toggle-->
                </div>
                <div class="card-body pt-2">

                    <div class="right-widget">
                        <div class="custom-title-wrap bar-primary mb-4">
                            <div class="custom-title">Today's Activity</div>
                        </div>

                        <ul class="list-unstyled base-timeline">
                            <li class="time-dot-primary">
                                <div class="base-timeline-info">
                                    <a href="#">John123</a> Successfully purchased item#26
                                </div>
                                <small class="text-muted">
                                    28 mins ago
                                </small>
                            </li>
                            <li class="time-dot-danger">
                                <div class="base-timeline-info">
                                    <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                                </div>
                                <small class="text-muted">
                                    2 days ago
                                </small>
                            </li>
                            <li class="time-dot-purple">
                                <div class="base-timeline-info">
                                    User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                                </div>
                                <small class="text-muted">
                                    12 mins ago
                                </small>
                            </li>
                        </ul>
                    </div>

                    <div class="right-widget">
                        <div class="custom-title-wrap bar-danger mb-4">
                            <div class="custom-title">Active Users</div>
                        </div>

                        <ul class="list-unstyled mb-0 list-widget">
                            <li class="cursor">
                                <div class="media mb-4">
                                    <div class="st-alphabet mr-3">
                                        <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                        <span class="status bg-success"></span>
                                    </div>
                                    <div class="media-body ">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                            <span class="text-muted">Online</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cursor">
                                <div class="media mb-4">
                                    <div class="st-alphabet mr-3">
                                        <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                        <span class="status bg-warning"></span>
                                    </div>
                                    <div class="media-body ">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">james alexender</h6>
                                            <span class="text-muted">Screaming...</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cursor">
                                <div class="media mb-4">
                                    <div class="st-alphabet mr-3">
                                        <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                        <span class="status bg-info"></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                            <span class="text-muted">Start Exploring</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="cursor">
                                <div class="media mb-3">
                                    <div class="st-alphabet mr-3">
                                        <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                        <span class="status bg-danger"></span>
                                    </div>
                                    <div class="media-body">
                                        <div class="float-left">
                                            <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                            <span class="text-muted">Busy</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="right-widget">

                        <div class="custom-title-wrap bar-success mb-4">
                            <div class="custom-title">Notification</div>
                        </div>

                        <div >
                            <a class="nav-link border-bottom px-0 py-3" href="#">
                                    <span class="text-primary">
                                    <span class="weight700 f12">
                                        <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                                    </span>
                                <span class="small float-right text-muted">03:14 AM</span>

                                <div class="text-dark f12">
                                    This week project update report generated. All team members are requested to check the updates
                                </div>
                            </a>

                            <a class="nav-link border-bottom px-0 py-3" href="#">
                                    <span class="text-danger">
                                    <span class="weight700 f12">
                                        <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                                    </span>
                                <span class="small float-right text-muted">10:34 AM</span>

                                <div class="text-dark f12">
                                    Unexpectedly server response stop. Responsible members are requested to fix it soon
                                </div>
                            </a>

                            <a class="nav-link border-bottom px-0 py-3" href="#">
                                    <span class="text-success">
                                    <span class="weight700 f12">
                                        <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                                    </span>
                                <span class="small float-right text-muted">12:30 AM</span>

                                <div class="text-dark f12">
                                    Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                                </div>
                            </a>

                            <div class="text-center mt-3">
                                <a class="nav-link px-0" href="#">View all notification</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--/right sidebar-->
    </div>
<!--basic scripts-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/vendor/icheck/skins/icheck.min.js"></script>

<!--sparkline-->
<script src="assets/vendor/sparkline/jquery.sparkline.js"></script>
<!--sparkline initialization-->
<script src="assets/vendor/js-init/sparkline/init-sparkline.js"></script>

<!--c3chart-->
<script src="assets/vendor/c3chart/d3.min.js"></script>
<script src="assets/vendor/c3chart/c3.min.js"></script>
<!--c3chart initialization-->
<script src="assets/vendor/js-init/c3chart/init-c3chart.js"></script>

<!--chartjs-->
<script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
<!--chartjs initialization-->
<script src="assets/vendor/js-init/chartjs/init-bubble-chart.js"></script>
<script src="assets/vendor/js-init/chartjs/init-mixed-chart.js"></script>

<!--vectormap-->
<script src="assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-us-aea.js"></script>
<!--vectormap initialization-->
<script src="assets/vendor/js-init/vmap/init-vmap-world.js"></script>
<script src="assets/vendor/js-init/vmap/init-vmap-usa.js"></script>

<!--to do list-->
<script src="assets/vendor/icheck/skins/icheck.min.js"></script>
<!--to do list initialization-->
<script src="assets/vendor/js-init/init-todo-list.js"></script>

<!--[if lt IE 9]>
<script src="assets/vendor/modernizr.js"></script>
<![endif]-->

<!--basic scripts initialization-->
<script src="assets/js/scripts.js"></script>

</body>

<!-- Mirrored from thevectorlab.net/codelab/dashboard-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Dec 2018 00:12:02 GMT -->
</html>

