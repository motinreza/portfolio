<?php

require_once "include/header.php";

$review = new app\classes\Review();
$reviewAll = $review->reviewAll();

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
                    <form action="insert.php" enctype="multipart/form-data" method="post" class="card-content">
                        <ul class="list-inline">
                            <li class="form-group">
                                <input type="number" name="customer" value="" class="form-control" placeholder="Customer">
                            </li>
                            <li class="form-group">
                                <input type="number" name="project" value="" class="form-control" placeholder="Project">
                            </li>
                            <li class="form-group">
                                <input type="number" name="review" value="" class="form-control" placeholder="Review">
                            </li>
                            <li class="form-group">
                                <input type="number" name="running" value="" class="form-control" placeholder="Running">
                            </li>
                            <div class="form-group">
                                <div class="radio">
                                    <input type="radio" name="status" id="active" value="active" required>
                                    <label for="active">Active</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="status" id="inactive" value="inactive" required>
                                    <label for="inactive">Inactive</label>
                                </div>
                            </div>
                            <li class="form-group">
                                <button name="short_review" class="btn btn-sm btn-success">Short review</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>

            <div class="col-xs-12">

                <?php

                if(isset($_SESSION["delete"])){
                    echo $_SESSION["delete"];
                    unset($_SESSION["delete"]);
                }

                ?>

                <div class="box-content" style="font-size:14px;">
                    <h4 class="box-title">Services result view</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="">Edit</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Project</th>
                                <th>Review</th>
                                <th>Running</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($reviewRow = mysqli_fetch_assoc($reviewAll)){
                                ?>
                                <tr>
                                    <td><?= $reviewRow['customer']; ?></td>
                                    <td><?= $reviewRow['project']; ?></td>
                                    <td><?= $reviewRow['review']; ?></td>
                                    <td><?= $reviewRow['running']; ?></td>
                                    <td>
                                        <?php
                                        if($reviewRow["status"] == 'active'){
                                            ?>
                                            <a href="status.php?inactive6=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="status.php?active6=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="shor-review-edit.php?editHero=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                        <a href="delete.php?delete6=<?= base64_encode($reviewRow['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
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
</div>

<?php require_once "include/footer.php"; ?>
