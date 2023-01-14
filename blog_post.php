<?php

require_once "header.php";

use app\classes\Database;

if(isset($_GET["page"])){

    $slug = $_GET["page"];
    $post = mysqli_query(Database::dbCon(), "SELECT * FROM `blog` WHERE `slug` = '$slug' ");
    $postRow = mysqli_fetch_assoc($post);

}

?>

<section id="portfolio" class="py-5">
    <div class="container">
        <section id="blog_details">
            <h2 class="title text-center my-5"><?= $postRow['title']; ?></h2>
            <div class="container">
				<div class="image_section">
					<img class="img-fluid" src="uploads/blog/<?= $postRow['image']; ?>" alt="">
				</div>
			</div>
            <div class="container">
				<div class="mt-5">
					<?= $postRow['content']; ?>
				</div>
            </div>
        </section>
    </div>
</section>

<?php require_once "header.php"; ?>
