<?php require_once "include/header.php"; ?>

<?php

$about = new app\classes\About();

if(isset($_POST["about_add"])){
    $about->aboutaddAccess($_POST);
    header("location: about-add.php");
}


$hero = new app\classes\Hero();

if(isset($_POST["hero_add"])){
    $hero->addHero($_POST);
    header("location: hero-add.php");
}


$heroCategory = new app\classes\Hero_category();

if(isset($_POST["hero_category"])){
    $heroCategory->addCategory($_POST);
    header("location: hero-category.php");
}


$skill = new app\classes\Skill();

if(isset($_POST["skill_save"])){
    $skill->addSkill($_POST);
    header("location: skill.php");
}


$services = new app\classes\Services();

if(isset($_POST["services_add"])){
    $services->addServices($_POST);
    header("location: services-add.php");
}


$review = new app\classes\Review();

if(isset($_POST["short_review"])){
    $review->reviewAdd($_POST);
    header("location: short-review.php");
}


$portfolio = new app\classes\Portfolio();

if(isset($_POST["portfolio_add"])){
    $portfolio->portfolioAdd($_POST);
    header("location: portfolio.php");
}

$customerReview = new app\classes\Customer_review();

if(isset($_POST["customerReview_save"])){
    $customerReview->cReviewAdd($_POST);
    header("location: customer-review.php");
}

$blog = new app\classes\Blog();

if(isset($_POST["category_add"])){
    $blog->addBlogCategory($_POST);
    header("location: blog-category.php");
}

if(isset($_POST["blog_add"])){
    $blog->blogAdd($_POST);
    header("location: blog.php");
}
?>

<?php  require_once "include/footer.php"; ?>
