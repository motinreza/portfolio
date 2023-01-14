<?php require_once "include/header.php"; ?>

<?php

$status = new app\classes\Status();

$id = base64_decode($_GET["inactive"]);
if(isset($_GET["inactive"])){
    $status->heroInactive($id);
    header("location: hero-view.php");
}

$id = base64_decode($_GET["active"]);
if(isset($_GET["active"])){
    $status->heroActive($id);
    header("location: hero-view.php");
}


$id = base64_decode($_GET["inactive2"]);
if(isset($_GET["inactive2"])){
    $status->aboutInactive($id);
    header("location: about-view.php");
}

$id = base64_decode($_GET["active2"]);
if(isset($_GET["active2"])){
    $status->aboutActive($id);
    header("location: about-view.php");
}


$id = base64_decode($_GET["inactive3"]);
if(isset($_GET["inactive3"])){
    $status->categoryInactive($id);
    header("location: hero-category.php");
}

$id = base64_decode($_GET["active3"]);
if(isset($_GET["active3"])){
    $status->categoryActive($id);
    header("location: hero-category.php");
}


$id = base64_decode($_GET["inactive4"]);
if(isset($_GET["inactive4"])){
    $status->skillInactive($id);
    header("location: skill.php");
}

$id = base64_decode($_GET["active4"]);
if(isset($_GET["active4"])){
    $status->skillActive($id);
    header("location: skill.php");
}


$id = base64_decode($_GET["inactive5"]);
if(isset($_GET["inactive5"])){
    $status->servicesInactive($id);
    header("location: services-view.php");
}

$id = base64_decode($_GET["active5"]);
if(isset($_GET["active5"])){
    $status->servicesActive($id);
    header("location: services-view.php");
}


$id = base64_decode($_GET["inactive6"]);
if(isset($_GET["inactive6"])){
    $status->reviewInactive($id);
    header("location: short-review.php");
}

$id = base64_decode($_GET["active6"]);
if(isset($_GET["active6"])){
    $status->reviewActive($id);
    header("location: short-review.php");
}


$id = base64_decode($_GET["inactive7"]);
if(isset($_GET["inactive7"])){
    $status->portfolioInactive($id);
    header("location: portfolio.php");
}

$id = base64_decode($_GET["active7"]);
if(isset($_GET["active7"])){
    $status->portfolioActive($id);
    header("location: portfolio.php");
}


$id = base64_decode($_GET["inactive8"]);
if(isset($_GET["inactive8"])){
    $status->creviewInactive($id);
    header("location: customer-review.php");
}

$id = base64_decode($_GET["active8"]);
if(isset($_GET["active8"])){
    $status->creviewActive($id);
    header("location: customer-review.php");
}


$id = base64_decode($_GET["inactive9"]);
if(isset($_GET["inactive9"])){
    $status->categoryBlogInactive($id);
    header("location: blog-category.php");
}

$id = base64_decode($_GET["active9"]);
if(isset($_GET["active9"])){
    $status->categoryBlogActive($id);
    header("location: blog-category.php");
}

$id = base64_decode($_GET["inactive10"]);
if(isset($_GET["inactive10"])){
    $status->BlogInactive($id);
    header("location: blog.php");
}

$id = base64_decode($_GET["active10"]);
if(isset($_GET["active10"])){
    $status->BlogActive($id);
    header("location: blog.php");
}
?>

<?php require_once "include/footer.php"; ?>
