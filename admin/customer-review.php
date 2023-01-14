<?php

require_once "include/header.php";

$customerReview = new app\classes\Customer_review();
$cReviewId = $customerReview->cReviewAll();

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
                    <form action="insert.php" enctype="multipart/form-data" method="POST" class="card-content">
                        <ul class="list-inline">
                            <li class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Client Name">
                            </li>
                            <li class="form-group">
                                <input type="text" name="comment" class="form-control" placeholder="Client Comment">
                            </li>
                            <li class="form-group">
                                <input type="text" name="country" class="form-control" placeholder="Client Country">
                            </li>
                            <li class="form-group">
                                <select name="review" class="form-control" id="">
                                    <?php

                                    for($number = 1; $number <= 5; $number++){
                                        ?>
                                        <option value="<?= $number; ?>"><?= $number; ?></option>
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
                                        <input type="file" name="image" id="input-file-now" class="dropify">
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>

                            <div class="form-group">
                                <div class="radio">
                                    <input type="radio" name="status" id="active" value="active">
                                    <label for="active">Active</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="status" id="inactive" value="inactive">
                                    <label for="inactive">Inactive</label>
                                </div>
                            </div>

                            <li class="form-group margin-top-10">
                                <button type="submit" name="customerReview_save" class="btn btn-sm btn-success">Save</button>
                            </li>
                        </ul>
                    </form>
                    <!-- /.card-content -->
                </div>
            </div>

            <div class="col-xs-12">
                <div class="box-content" style="font-size:14px;">
                    <h4 class="box-title">Your Works and Review</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="#">Edit</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Client name</th>
                            <th>Comment</th>
                            <th>Country</th>
                            <th>Review</th>
                            <th>image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($reviewRow = mysqli_fetch_assoc($cReviewId)){
                                ?>
                                <tr>
                                    <td><?= $reviewRow["name"]; ?></td>
                                    <td><?= $reviewRow["comment"]; ?></td>
                                    <td><?= $reviewRow["country"]; ?></td>
                                    <td><?= $reviewRow["review"]; ?></td>
                                    <td><img style="width: 80px;" src="../uploads/customer/<?= $reviewRow["image"]; ?>" alt=""></td>
                                    <td>
                                        <?php
                                        if($reviewRow["status"] == 'active'){
                                            ?>
                                            <a href="status.php?inactive8=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="status.php?active8=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="customer-review-edit.php?update8=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                        <a href="delete.php?delete8=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xs-12 -->
        </div>
    </div>
    <!-- /.main-content -->
</div><!--/#wrapper -->

<?php require_once "include/footer.php"; ?>
