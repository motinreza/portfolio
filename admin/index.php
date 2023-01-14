<?php

require_once "include/header.php";

$skill = new app\classes\Skill();
$skillAll = $skill->allSkill();

$review = new app\classes\Customer_review();
$reviewAll = $review->cReviewAll();

?>

<div id="wrapper">
    <div class="main-content">
        <h3 class="margin-bottom-20">Skill</h3>
        <div class="row small-spacing">

            <?php
            while($skillRow = mysqli_fetch_assoc($skillAll)){
                ?>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content text-center">
                        <div class="right-content">
                            <h4 class="name"><?= $skillRow['skill_name']; ?></h4>
                            <div class="text-success "><?= $skillRow['percent']; ?>%</div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <h3 class="margin-bottom-20">Works &amp; Review</h3>
        <div class="row small-spacing">

            <?php
            while($reviewRow = mysqli_fetch_assoc($reviewAll)){
                ?>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content user-info">
                        <div class="avatar"><img style="object-fit:cover; object-position:center; height:75px; width:75px;" src="../uploads/customer/<?= $reviewRow['image']; ?>" alt=""></div>
                        <div class="right-content">
                            <h4 class="name"><?= $reviewRow['name']; ?></h4>
                            <h5 class=""><?= $reviewRow['country']; ?></h5>
                            <small class=""><?= $reviewRow['comment']; ?></small>
                            <div class="text-warning small"><?= $reviewRow['review']; ?> <i class="fa fa-star"></i></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>

