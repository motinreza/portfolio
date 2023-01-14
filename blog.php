<?php

require_once "header.php";

use app\classes\Database;

$blog = new app\classes\Blog();
$blogShow = $blog->allBlogShow();

?>

<section id="blog_post" class="py-5">
    <div class="container">
        <div class="title_main my-5">
        <span class="main_title_section">
            My Blog
        </span>
        </div>
        <div class="row">

            <?php
            while($blogRow = mysqli_fetch_assoc($blogShow)){
                ?>

            <div class="column col-md-6 col-lg-4 col-xs-12 py-3">
                <div class="main_column">
                    <div class="image">

                        <?php

                        $cat_id = $blogRow['cat_id'];
                        $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog_category` WHERE `id` = '$cat_id' ");
                        $cat_row = mysqli_fetch_assoc($result);

                        ?>

                        <a tag="<?= $cat_row['category_name']; ?>" href="blog_post.php?page=<?= $blogRow['slug']; ?>"><img src="uploads/blog/<?= $blogRow['image']; ?>" alt=""></a>
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
</section>

<?php require_once "footer.php"; ?>