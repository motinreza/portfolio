<?php

require_once "include/header.php";

$delete = new app\classes\DeleteClass();

$id = base64_decode($_GET["delete"]);
if(isset($_GET["delete"])){
    $delete->aboutDelete($id);
    header("location: about-view.php");
}

$id  = base64_decode($_GET["delete2"]);
if(isset($_GET["delete2"])){
    $delete->heroDelete($id);
    header("location: hero-view.php");
}

$id  = base64_decode($_GET["delete3"]);
if(isset($_GET["delete3"])){
    $delete->categoryDelete($id);
    header("location: hero-category.php");
}

$id  = base64_decode($_GET["delete4"]);
if(isset($_GET["delete4"])){
    $delete->skillDelete($id);
    header("location: skill.php");
}

$id  = base64_decode($_GET["delete5"]);
if(isset($_GET["delete5"])){
    $delete->servicesDelete($id);
    header("location: services-view.php");
}

$id  = base64_decode($_GET["delete6"]);
if(isset($_GET["delete6"])){
    $delete->reviewDelete($id);
    header("location: short-review.php");
}

$id  = base64_decode($_GET["delete7"]);
if(isset($_GET["delete7"])){
    $delete->portfolioDelete($id);
    header("location: portfolio.php");
}

$id  = base64_decode($_GET["delete8"]);
if(isset($_GET["delete8"])){
    $delete->creviewDelete($id);
    header("location: customer-review.php");
}

$id  = base64_decode($_GET["delete9"]);
if(isset($_GET["delete9"])){
    $delete->blogCategoryDelete($id);
    header("location: blog-category.php");
}

$id  = base64_decode($_GET["delete10"]);
if(isset($_GET["delete10"])){
    $delete->blogDelete($id);
    header("location: blog.php");
}

?>

<?php require_once "include/footer.php"; ?>
