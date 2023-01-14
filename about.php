<?php

require_once "header.php";

$about = new app\classes\About();
$aboutShow = $about->allAboutShow();
$aboutRow = mysqli_fetch_assoc($aboutShow);

?>

<section id="about" class="py-5">
    <div class="container">
        <div class="image_section text-center my-5">
            <img class="rounded-circle" src="uploads/about/<?= $aboutRow["image"]; ?>" alt="">
        </div>
    </div>
    <div class="container">
        <h2 class="text-center"><?= $aboutRow['title']; ?></h2>
        <div class="row">
            <div class="description" style="display:table">
                <p><?= $aboutRow['description_two']; ?></p>
            </div>
        </div>
    </div>
</section>

<?php require_once "footer.php"; ?>