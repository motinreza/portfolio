<?php require_once "header.php"; ?>

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
    </section>

<?php require_once "footer.php"; ?>


