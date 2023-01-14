<?php

require_once "include/header.php";

$customerReview = new app\classes\Customer_review();

$id = base64_decode($_GET["update8"]);
$cReviewId = $customerReview->cReviewId($id);
$cReviewRow = mysqli_fetch_assoc($cReviewId);

if(isset($_POST["customerReview_edit"])){
    $customerReview->cReviewEdit($_POST);
    header("location: customer-review.php");
}

?>

<!-- /#message-popup -->
<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <?php

            if(isset($_SESSION["alert"])){
                echo $_SESSION["alert"];
                unset($_SESSION["alert"]);
            }

            ?>

            <!-- /.col-md-3 col-xs-12 -->
            <div class="col-md-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Add a New Works and Review</h4>
                    <!-- /.box-title -->
                    <form action="" enctype="multipart/form-data" method="POST" class="card-content">
                        <ul class="list-inline">
                            <li class="form-group">
                                <input type="hidden" name="id" value="<?= $cReviewRow['id']; ?>">
                                <input type="text" name="name" class="form-control" value="<?= $cReviewRow['name']; ?>" placeholder="Client Name">
                            </li>
                            <li class="form-group">
                                <input type="text" name="comment" class="form-control" value="<?= $cReviewRow['comment']; ?>" placeholder="Client Comment">
                            </li>
                            <li class="form-group">
                                <input type="text" name="country" class="form-control" value="<?= $cReviewRow['country']; ?>" placeholder="Client Country">
                            </li>
                            <li class="form-group">
                                <select name="review" class="form-control" id="">
                                    <?php

                                    for($number = 1; $number <= 5; $number++){
                                        ?>
                                        <option <?= $cReviewRow['review'] == $number ? 'selected':''; ?> value="<?= $number; ?>"><?= $number; ?></option>
                                        <?php
                                    }

                                    ?>

                                </select>
                            </li>
                        </ul>
                        <ul class="list-inline">
                            <div class="row">
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <div class="form-group">
                                        <input type="hidden" name="old_file" value="<?= $cReviewRow['image']; ?>">
                                        <input type="file" name="image" id="input-file-now" class="dropify">
                                        <img style="width: 80px;" src="../uploads/customer/<?= $cReviewRow['image']; ?>" alt="">
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>

                            <div class="form-group">
                                <div class="radio">
                                    <input type="radio" name="status" id="active" <?= $cReviewRow['status'] == 'active' ? 'checked':''; ?> value="active">
                                    <label for="active">Active</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="status" id="inactive" <?= $cReviewRow['status'] == 'inactive' ? 'checked':''; ?> value="inactive">
                                    <label for="inactive">Inactive</label>
                                </div>
                            </div>

                            <li class="form-group margin-top-10">
                                <button type="submit" name="customerReview_edit" class="btn btn-sm btn-success">Customer review edit</button>
                            </li>
                        </ul>
                    </form>
                    <!-- /.card-content -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>