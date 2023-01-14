<?php

ob_start();

require_once "../app/classes/Autoload.php";

if(!isset($_SESSION["username"])){
    header("location: login.php");
}

$php_self = $_SERVER["PHP_SELF"];
$php_exp = explode('/', $php_self);
$php_end = end($php_exp);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= ucfirst(basename($_SERVER["PHP_SELF"], '.php')); ?> | Motin Reza </title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="../assets/backend_file/assets/styles/style.min.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/sweet-alert/sweetalert.css">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/percircle/css/percircle.css">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/chart/chartist/chartist.min.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

    <!-- Dropify -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/dropify/css/dropify.min.css">

    <link rel="stylesheet" href="../assets/backend_file/assets/datepicker/css/datepicker.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

    <!-- Dark Themes -->
    <link rel="stylesheet" href="../assets/backend_file/assets/styles/style-dark.min.css">
</head>

<body>

<?php

$profile = new app\classes\Profile();
$profileAccess = $profile->profileAccess();
$profileRow = mysqli_fetch_assoc($profileAccess);

?>

<div class="main-menu">
    <header class="header">
        <a href="index.php" class="logo">NinjaTeam</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img style="object-fit:cover; object-position:center; height:75px; width:75px;" src="../uploads/profile/<?= $profileRow['image']; ?>" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="index.php"><?= $profileRow['name']; ?></a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->

    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'index.php' ? 'active':''; ?>">
                    <a class="waves-effect" href="index.php"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                </li>
                <li class="<?= $php_end == 'profile.php' ? 'active':''; ?>">
                    <a class="waves-effect" href="profile.php"><i class="menu-icon fa fa-user"></i><span>Profile</span></a>
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'hero-add.php' ? 'current active':''; ?> <?= $php_end == 'hero-view.php' ? 'current active':''; ?>">
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-magnet"></i><span>Hero sima</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li class="<?= $php_end == 'hero-add.php' ? 'current':''; ?>"><a href="hero-add.php">Hero add</a></li>
                        <li class="<?= $php_end == 'hero-view.php' ? 'current':''; ?>"><a href="hero-view.php">Hero view</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'about-add.php' ? 'current active':''; ?> <?= $php_end == 'about-view.php' ? 'current active':''; ?> <?= $php_end == 'hero-category.php' ? 'current active':''; ?>">
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-eject"></i><span>About</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li class="<?= $php_end == 'about-add.php' ? 'current':''; ?>"><a href="about-add.php">About add</a></li>
                        <li class="<?= $php_end == 'about-view.php' ? 'current':''; ?>"><a href="about-view.php">View About</a></li>
                        <li class="<?= $php_end == 'hero-category.php' ? 'current':''; ?>"><a href="hero-category.php">Hero category</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'skill.php' ? 'current active':''; ?>">
                    <a class="waves-effect" href="skill.php"><i class="menu-icon fa fa-user"></i><span>Skill</span></a>
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'services-add.php' ? 'current active':''; ?> <?= $php_end == 'services-view.php' ? 'current active':''; ?> ">
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-signal"></i><span>Services</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li class="<?= $php_end == 'services-add.php' ? 'current':''; ?>"><a href="services-add.php">Services add</a></li>
                        <li class="<?= $php_end == 'services-view.php' ? 'current':''; ?>"><a href="services-view.php">View Services</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'short-review.php' ? 'current active':''; ?>">
                    <a class="waves-effect" href="short-review.php"><i class="menu-icon fa fa-star"></i><span>Short review</span></a>
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'portfolio.php' ? 'current active':''; ?>">
                    <a class="waves-effect" href="portfolio.php"><i class="menu-icon fa fa-bars"></i><span>Portfolio</span></a>
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'customer-review.php' ? 'current active':''; ?>">
                    <a class="waves-effect" href="customer-review.php"><i class="menu-icon fa fa-star-half"></i><span>Customer review</span></a>
                </li>
            </ul>

            <ul class="menu js__accordion">
                <li class="<?= $php_end == 'blog-category.php' ? 'current active':''; ?> <?= $php_end == 'blog.php' ? 'current active':''; ?> ">
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-signal"></i><span>Blog</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li class="<?= $php_end == 'blog-category.php' ? 'current':''; ?>"><a href="blog-category.php">Blog category</a></li>
                        <li class="<?= $php_end == 'blog.php' ? 'current':''; ?>"><a href="blog.php">Blog create</a></li>
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>
            </ul>

        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title"><?= ucfirst(basename($_SERVER["PHP_SELF"], '.php')); ?></h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        <!-- /.ico-item -->
        <a href="logout.php" class="ico-item fa fa-power-off"></a>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->