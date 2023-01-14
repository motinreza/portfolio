<?php

ob_start();

require_once "app/classes/Autoload.php";

$hero = new app\classes\Hero();
$heroAllShow = $hero->heroAllShow();
$heroRow = mysqli_fetch_assoc($heroAllShow);

$php_self = $_SERVER["PHP_SELF"];
$php_explode = explode('/',$php_self);
$php_end = end($php_explode);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= ucfirst(basename($_SERVER["PHP_SELF"], '.php')); ?> | Motin Reza </title>

    <link rel="stylesheet" href="desing_vendor/css/style.css" />
    <link rel="stylesheet" href="desing_vendor/css/clip_plagin.css" />
    <link rel="shortcut icon" href="uploads/hero/<?= $heroRow['shortcut']; ?>">
    <link rel="stylesheet" href="desing_vendor/css/bootstrap.min.css" />

    <link rel="stylesheet" href="desing_vendor/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="desing_vendor/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="desing_vendor/css/owl.theme.green.min.css" />

    <script src="desing_vendor/js/fontawesome.all.min.js"></script>

    <script src="desing_vendor/js/jquery.min.js"></script>

    <script src="desing_vendor/js/jquery-3.5.1.min.js"></script>

    <!------------------------ image modal link --------------------------->

    <link rel="stylesheet" href="desing_vendor/css/magnific-popup.css" />
    <script src="desing_vendor/js/isotope.pkgd.js"></script>
    <script src="desing_vendor/js/jquery.magnific-popup.js"></script>


</head>
<body>

<section id="navbar" class="fixed-top bg-dark text-white">
    <div class="container">
        <nav class="navbar navbar-expand-md">
            <a href="index.php" class="navbar-brand"><img src="uploads/hero/<?= $heroRow['logo']; ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_toggler">
                <span class="bars">
                    <i class="fas fa-bars text-white"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbar_toggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= $php_end == 'index.php' ? 'active':''; ?>">
                        <a href="index.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item <?= $php_end == 'service.php' ? 'active':''; ?>">
                        <a href="service.php" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item <?= $php_end == 'portfolio.php' ? 'active':''; ?>">
                        <a href="portfolio.php" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item <?= $php_end == 'review.php' ? 'active':''; ?>">
                        <a href="review.php" class="nav-link">Review</a>
                    </li>
                    <li class="nav-item <?= $php_end == 'blog.php' ? 'active':''; ?>">
                        <a href="blog.php" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item <?= $php_end == 'about.php' ? 'active':''; ?>">
                        <a href="about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item <?= $php_end == 'contact.php' ? 'active':''; ?>">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" href="https://wetransfer.com/" class="nav-link">File Share</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>