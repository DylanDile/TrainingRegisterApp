<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="mictpcs ">
    <meta name="author" content="Tapiwa Nobela">
    <meta name="keywords" content="ccs">

    <!-- Title Page-->
    <title>CCS Online</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="">


<?php 
session_start();

if (!empty($_SESSION['msg'])) {
    $msg=$_SESSION['msg'];
}
?>

    <div class="page-wrapper">
        <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                            <img src="images/ministry.png" alt="CCS" width="90" height="90" />
                       
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb3">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">Welcome to CCS Online Portal</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">
                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                    <!-- ALERT-->
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content"><?php echo "Welcome to Central Computing Services Training Department."?></span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                    <!-- END ALERT-->
                </div>
            </section>

       <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active">
                                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class=""><i class="fa fa-list"></i> <span> Apply for Training</span></a>
                                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                                <li>
                                                    <a href="webRegistration.php"><i class="zmdi zmdi-check-circle"></i> <span> Apply & Book</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                        </div>


                        <div class="col-xl-3">
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active">
                                            <a href="#track" data-toggle="collapse" aria-expanded="false" class=""><i class="fa fa-list"></i> <span> Track Application</span></a>
                                            <ul class="collapse list-unstyled" id="track">
                                                <li>
                                                    <a href="login.php"><i class="zmdi zmdi-check-circle"></i> <span> Track Application</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                        </div>                        
                        
                        <div class="col-xl-3">
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active">
                                            <a href="#about" data-toggle="collapse" aria-expanded="false" class=""><i class="fa fa-list"></i> <span> Admin Login</span></a>
                                            <ul class="collapse list-unstyled" id="about">
                                                <li>
                                                    <a href="admin/index.php"><i class="zmdi zmdi-check-circle"></i> <span> Login as Admin</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                        </div>


                        <div class="col-xl-3">
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active">
                                            <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-list"></i> <span> Contact Us</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                        </div>

                    </div>
                    <br>
                </div>
            </section>
        </div>

    </div>





    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
<br>
<br>
<hr>
<footer>
    <div class="active ">
        <p class="text-center"><marquee><b>@Copyright CCS Online Portal : Developed by Tapiwa. Taps</b></marquee></p>
    </div>
</footer>
</html>
<!-- end document-->