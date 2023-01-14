<?php

require_once "header.php";

$customerReview = new app\classes\Customer_review();
$customerReviewShow = $customerReview->customerReviewShow();

?>

<section id="comtomer_review" class="py-5 my-5">
    <div class="title_main">
        <span class="main_title_section">
            Customer Review
        </span>
    </div>
    <div class="container">
        <div class="row py-5">

            <?php
            while($customerReviewRow = mysqli_fetch_assoc($customerReviewShow)){
                ?>
                <div class="column col-md-6 col-lg-3 col-xs-13">
                    <div class="main_column mt-5">
                        <div class="image">
                            <img src="uploads/customer/<?= $customerReviewRow['image']; ?>" class="img-fluid" alt="Responsive image">
                        </div>
                        <div class="description">
                            <div class="row py-1">
                                <div class="col-4">
                                    Name:
                                </div>
                                <div class="col-8">
                                    <?= $customerReviewRow['name']; ?>
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-4">
                                    Comment
                                </div>
                                <div class="col-8 scroller client_comment">
                                    <?= $customerReviewRow['comment']; ?>
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-4">
                                    Country:
                                </div>
                                <div class="col-8">
                                    <?= $customerReviewRow['country']; ?>
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-4">
                                    Review:
                                </div>
                                <div class="col-8">
                                    <?= $customerReviewRow['review']; ?>
                                </div>
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

<?php require_once "footer.php"; ?>