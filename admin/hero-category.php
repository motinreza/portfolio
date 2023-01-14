<?php

require_once "include/header.php";

$heroCategory = new app\classes\Hero_category();
$allCategory = $heroCategory->allCategory();

?>

<div id="wrapper">
    <div class="main-content">

        <?php

        if(isset($_SESSION["category_add"])){
            echo $_SESSION["category_add"];
            unset($_SESSION["category_add"]);
        }

        ?>

        <!-- /.col-md-3 col-xs-12 -->
        <div class="col-md-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Hero category</h4>
                <!-- /.box-title -->
                <form action="insert.php" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="text" name="category_name" class="form-control" placeholder="Category name" required>
                    </div>
                    <ul class="list-inline">
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

                        <li class="form-group margin-top-10">
                            <button type="submit" name="hero_category" class="btn btn-sm btn-success">Add category</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>


        <div class="row small-spacing">

            <div class="col-xs-12">

                <?php

                if(isset($_SESSION["delete"])){
                    echo $_SESSION["delete"];
                    unset($_SESSION["delete"]);
                }

                ?>

                <div class="box-content" style="font-size:14px;">
                    <h4 class="box-title">About result view</h4>
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
                                <th>Category name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($categoryRow = mysqli_fetch_assoc($allCategory)){
                                ?>
                                <tr>
                                    <td><?= $categoryRow['category_name']; ?></td>
                                    <td>
                                        <?php
                                        if($categoryRow["status"] == 'active'){
                                            ?>
                                            <a href="status.php?inactive3=<?= base64_encode($categoryRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="status.php?active3=<?= base64_encode($categoryRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="category-edit.php?update3=<?= base64_encode($categoryRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                        <a href="delete.php?delete3=<?= base64_encode($categoryRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
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
