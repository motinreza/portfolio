<?php

require_once "include/header.php";

$review = new app\classes\Review();
$reviewAll = $review->reviewAll();

$id = base64_decode($_GET["editHero"]);
$revieEditid = $review->reviewEditid($id);
$reviewRow = mysqli_fetch_assoc($revieEditid);

if(isset($_POST["short_review_edit"])){
    $review->reviewEdit($_POST);
    header("location: short-review.php");
}


?>

<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <?php

            if(isset($_SESSION["alert"])){

                echo $_SESSION["alert"];
                unset($_SESSION["alert"]);

            }

            ?>

            <div class="col-md-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Short Review </h4>
                    <form action="" enctype="multipart/form-data" method="post" class="card-content">
                        <ul class="list-inline">
                            <li class="form-group">
                                <input type="hidden" name="id" value="<?= $reviewRow['id']; ?>">
                                <input type="number" name="customer" class="form-control" value="<?= $reviewRow['customer']; ?>" placeholder="Customer">
                            </li>
                            <li class="form-group">
                                <input type="number" name="project" class="form-control" value="<?= $reviewRow['project']; ?>" placeholder="Project">
                            </li>
                            <li class="form-group">
                                <input type="number" name="review" class="form-control" value="<?= $reviewRow['review']; ?>" placeholder="Review">
                            </li>
                            <li class="form-group">
                                <input type="number" name="running" class="form-control" value="<?= $reviewRow['running']; ?>" placeholder="Running">
                            </li>
                            <div class="form-group">
                                <div class="radio">
                                    <input type="radio" name="status" id="active" <?= $reviewRow['status'] == 'active' ? 'checked':''; ?> value="active">
                                    <label for="active">Active</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="status" id="inactive" <?= $reviewRow['status'] == 'inactive' ? 'checked':''; ?> value="inactive">
                                    <label for="inactive">Inactive</label>
                                </div>
                            </div>
                            <li class="form-group">
                                <button name="short_review_edit" class="btn btn-sm btn-success">Short review edit</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
