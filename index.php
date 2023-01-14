<?php

require_once "header.php";

use app\classes\Database;

$heroCategory = new app\classes\Hero_category();
$allCategory = $heroCategory->allCategoryShow();

?>

<section id="home">
    <div class="home-image">
        <div class="imageadd" style="background: url('uploads/hero/<?= $heroRow['background']; ?>');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
    </div>
    <div class="home-page">
        <h4 class="title text-white">Hello, Welcome to my website!</h4>
        <h2 class="btm_title">
            <div class="cd-headline clip is-full-width">
                <span class="iam mt-3">I Am</span>
                <span class="cd-words-wrapper category">
                    <b class="is-visible">
                        <span style="font-family: 'Josefin Sans', sans-serif"><?= $heroRow['owner_name']; ?></span>
                    </b>

                    <?php
                    while($allCategoryRow = mysqli_fetch_assoc($allCategory)){
                        ?>
                        <b><span>a <?= $allCategoryRow['category_name']; ?></span></b>
                        <?php
                    }
                    ?>

                </span>

            </div>
        </h2>
        <div class="scroll_bottom">
            <a href="#about_me">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </div>    
</section> 

<?php

$about = new app\classes\About();
$aboutShow = $about->allAboutShow();
$aboutRow = mysqli_fetch_assoc($aboutShow);

?>

<section class="py-5" id="about_me">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-5">
                <div class="about_image_main">
                    <div class="about_image_sub" style="background-image: url('uploads/about/<?= $aboutRow["image"]; ?>');background-position: center center;background-repeat: no-repeat;background-size: cover;"></div>
                </div>
            </div>
            <div class="col-lg-7 description">
                <div class="title_section">
                    <span class="title">
                        <?= $aboutRow['title']; ?>
                    </span>
                </div>
                <div class="long_description">
                    <?= $aboutRow['description_one']; ?>
                </div>
                <div class="share_section">
                    <div class="icon">
                        <a target="_blank" href="<?= $aboutRow['facebook']; ?>"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="icon">
                        <a target="_blank" href="<?= $aboutRow['twitter']; ?>"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="icon">
                        <a target="_blank" href="<?= $aboutRow['instagram']; ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="icon">
                        <a target="_blank" href="<?= $aboutRow['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <div class="icon">
                        <a target="_blank" href="<?= $aboutRow['behance']; ?>"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
                <div class="hire_section">
                    <div class="buttones">
                        <a target="_blank" href="<?= $aboutRow['fiverr']; ?>" front="HIRE ME" back="GO NOW" class="hire_me"></a>
                    </div>

                    <div class="buttones">
                        <a target="_blank" href="<?= $aboutRow['resume']; ?>" front="DOWNLOAD C.V" back="GO TO RESUME" class="download_cv"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php

$skill = new app\classes\Skill();
$skillShow = $skill->allSkillShow();

?>

<section class="" id="skill" style="background: linear-gradient( rgb(10 10 10), rgba(0, 0, 0,0.8)),url(img/skill_background.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;background-attachment: fixed;">
    <div class="container">
        <div class="icons">
            <span class="icon">
                <i class="fas fa-code"></i>
            </span>
        </div>
        <div class="title text-center">
            <span class="title_tag">
                My Skills
            </span>
        </div>
        <div class="skills">

            <?php

            while($row7 = mysqli_fetch_assoc($skillShow)){
                ?>
                <div class="skill">
                    <?= $row7["skill_name"]; ?>
                    <div class="percent_section">
                        <div class="percent_bar percent<?= $row7["percent"]; ?>"></div>
                        <div class="percent"><?= $row7["percent"]; ?>%</div>
                    </div>
                </div>
                <?php
            }

            ?>

        </div>
    </div>
</section>

<?php

$services = new app\classes\Services();
$servicesShow = $services->allServicesShow();

?>

<section id="services" class="py-5 my-5">
    <div class="container">
        <div class="title_main">
            <span class="main_title_section">
                My Services
            </span>
        </div>
        <div class="row py-5 text-center">

            <?php
            while($servicesRow = mysqli_fetch_assoc($servicesShow)){
                ?>
                <div class="col-xs-12 column col-md-6 col-lg-4">
                    <div class="column_section">
                        <div class="icon">
                            <img src="uploads/services/<?= $servicesRow['image']; ?>" alt="">
                        </div>
                        <h3>
                            <span><?= $servicesRow['title']; ?></span>
                        </h3>
                        <p><?= $servicesRow['description']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <div class="buttons text-center">
            <a href="service.php" class="button">View More</a>
        </div>
    </div>
</section>

<?php

$review = new app\classes\Review();
$reviewShow = $review->shortReviewShow();
$reviewRow = mysqli_fetch_assoc($reviewShow);

?>

<section class="py-5" id="client_satisfy" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0,0.7)),url('img/counter_image.jpg');background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
    <div class="container">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg col-sm-12">
                    <div class="counter">
                      <i class="far fa-smile fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="<?= $reviewRow['customer']; ?>" data-speed="1500"></h2>
                      <p class="count-text ">Our clients</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg col-sm-12">
                    <div class="counter">
                      <i class="fas fa-layer-group fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="<?= $reviewRow['project']; ?>" data-speed="1500"></h2>
                      <p class="count-text ">Project complete</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg col-sm-12">
                    <div class="counter">
                      <i class="fas fa-star fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="<?= $reviewRow['review']; ?>" data-speed="1500"></h2>
                      <p class="count-text ">Total review</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg col-sm-12">
                    <div class="counter">
                      <i class="fas fa-sync-alt fa-2x"></i>
                      <h2 class="timer count-title count-number" data-to="<?= $reviewRow['running']; ?>" data-speed="1500"></h2>
                      <p class="count-text ">Project running</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$portfolio = new app\classes\Portfolio();
$portfolioShow = $portfolio->allPortfolioShow();

?>

<section id="portfolio" class="py-5 my-5">
    <div class="title_main">
        <span class="main_title_section">
            My Portfolio
        </span>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="row">

                <?php
                while($portfolioRow = mysqli_fetch_assoc($portfolioShow)){
                    ?>
                    <div class="col-lg-4 col-md-6 col-xs-12 column">
                        <a href="<?= $portfolioRow['portfolio_link']; ?>" target="_blank" class="portfolioSection" title="<?= $portfolioRow['title']; ?>" description="<?= $portfolioRow['description']; ?>">
                            <img class="img-thumbnail" src="uploads/portfolio/<?= $portfolioRow['image']; ?>" alt="Another alt text">
                        </a>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <div class="buttons text-center">
        <a href="portfolio.php" class="button">View More</a>
    </div>
</section>

<?php

$customerReview = new app\classes\Customer_review();
$customerReviewShow = $customerReview->customerReviewShow();

?>

<section id="review" class="py-5" style="background: linear-gradient( rgba(0, 0, 0, 0.8),rgba(0, 0, 0,0.8)), url('img/testimonial_image.jpg');background-attachment: fixed;background-size: cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="icon">
            <span class="icons">
                <i class="fas fa-handshake"></i>
            </span>
        </div>
        <div class="title_main text-white">
            <span class="main_title_section">
                Testimonial
            </span>
        </div>
        <div class="">
            <div class="owl-carousel carusel_one owl owl-theme">

                <?php
                while($customerReviewRow = mysqli_fetch_assoc($customerReviewShow)){
                    ?>
                    <div class="item">
                        <div class="client_image">
                            <img src="uploads/customer/<?= $customerReviewRow['image']; ?>" alt="">
                        </div>
                        <div class="comment">
                            <p class="text"><?= $customerReviewRow['comment']; ?></p>
                        </div>
                        <div class="name">
                            <span><?= $customerReviewRow['name']; ?></span>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>

<?php

$blog = new app\classes\Blog();
$blogShow = $blog->allBlogShow();

?>

<section id="blog2" class="py-5">
    <div class="container">
        <div class="title_main my-5">
            <span class="main_title_section">
                My Blog
            </span>
        </div>
        <div class="owl-carousel owl owl-theme row">

            <?php
            while($blogRow = mysqli_fetch_assoc($blogShow)){
                ?>
                <div class="item column  m-3">
                    <div class="main_column">
                        <div class="image">

                            <?php

                            $cat_id = $blogRow['cat_id'];
                            $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog_category` WHERE `id` = '$cat_id' ");
                            $cat_row = mysqli_fetch_assoc($result);

                            ?>

                            <a tag="<?= $cat_row['category_name']; ?>" href="blog_post.php?page=<?= $blogRow['slug']; ?>">
                                <img src="uploads/blog/<?= $blogRow['image']; ?>" alt="">
                            </a>
                        </div>
                        <div class="description">
                            <h2>
                                <a href="blog_post.php?page=<?= $blogRow['slug']; ?>"><?= substr($blogRow['title'], 0,50) ?>...</a>
                            </h2>
                        </div>
                        <div class="row creator mx-0">
                            <div class="col-6 pl-0 text-left">
                                <a href="blog_post.php?page=<?= $blogRow['slug']; ?>">Read More</a>
                            </div>
                            <div class="col-6 pr-0 text-right">
                                By : <a href="blog_post.php?page=<?= $blogRow['slug']; ?>"><?= $blogRow['username']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>

<?php

require_once "app/classes/Autoload.php";

$contact = new app\classes\Contact();

if(isset($_POST["message_send"])){
    $send_message = $contact->contactInfo($_POST);
}

?>

<section id="contact" class="py-5" style="background: linear-gradient( rgba(0, 0, 0, 0.8),rgba(0, 0, 0,0.8)), url('img/get_into_tech_image.jpg');background-attachment: fixed;background-size: cover;background-repeat: no-repeat;">
    <div class="container">
        <div class="title_main text-white">
            <span class="main_title_section">
                Get In Touch
            </span>
        </div>

        <style>

            .form-control:focus {
                background:transparent;

            }

        </style>

        <form method="POST" action="" class="py-5 full_form">
            <div class="form-row">
              <div class="form-group col-md-6 form_section">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name *">
              </div>
              <div class="form-group col-md-6 form_section">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email *">
              </div>
            </div>
            <div class="form-group form_section">
              <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject *">
            </div>
            <div class="form-group form_section_textarea">
              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message *"></textarea>
            </div>
            <div class="">
                <button type="submit"  name="message_send" class="buttones onclick:'reloadP()'">Send</button>
            </div>
        </form>

        <?php

        $profile = new app\classes\Profile();
        $profileAccess = $profile->profileAccess();
        $profileRow = mysqli_fetch_assoc($profileAccess);

        ?>

        <div class="container details_user text-white">
            <div class="row">
                <div class="col-md-6 column col-lg-4 col-xs-12">
                    <h4>Phone</h4>
                    <p><?= $profileRow['phone']; ?></p>
                </div>
                <div class="col-md-6 column col-lg-4 col-xs-12">
                    <h4>Email</h4>
                    <p><?= $profileRow['email']; ?></p>
                </div>
                <div class="col-md-6 column col-lg-4 col-xs-12">
                    <h4>Address</h4>
                    <p><?= $profileRow['address']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "footer.php"; ?>
