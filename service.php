<?php require_once "header.php"; ?>

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
    </div>
</section>

<?php require_once "footer.php"; ?>

