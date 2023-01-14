<?php

require_once "include/header.php";

$blog = new app\classes\Blog();
$allBlogCategory = $blog->allBlogCateogry();

?>

<div id="wrapper">
    <div class="main-content">

        <?php

        if(isset($_SESSION["data_insert"])){
            echo $_SESSION["data_insert"];
            unset($_SESSION["data_insert"]);
        }

        ?>

        <!-- /.col-md-3 col-xs-12 -->
        <div class="col-md-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Services add</h4>
                <!-- /.box-title -->
                <form action="insert.php" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="text" name="category_name" class="form-control" placeholder="Category name" required onkeyup="string_to_slug(this.value)">
                    </div>
                    <div class="form-group">
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" required>
                    </div>

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

                    <div class="form-group margin-top-10">
                        <button type="submit" name="category_add" class="btn btn-sm btn-success">Category add</button>
                    </div>
                </form>
                <!-- /.card-content -->
            </div>
        </div>

        <div class="col-xs-12">
            <div class="box-content" style="font-size:14px;">
                <h4 class="box-title">Your Works and Review</h4>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Category name</th>
                            <th>Slug</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($blogCRow = mysqli_fetch_assoc($allBlogCategory)){
                            ?>
                            <tr>
                                <td><?= $blogCRow['category_name']; ?></td>
                                <td><?= $blogCRow['slug']; ?></td>
                                <td><?= $blogCRow['username']; ?></td>
                                <td>
                                    <?php
                                    if($blogCRow["status"] == 'active'){
                                        ?>
                                        <a href="status.php?inactive9=<?= base64_encode($blogCRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                        <?php
                                    }else{
                                        ?>
                                        <a href="status.php?active9=<?= base64_encode($blogCRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="category-blog-edit.php?update9=<?= base64_encode($blogCRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                    <a href="delete.php?delete9=<?= base64_encode($blogCRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
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


<?php require_once "include/footer.php"; ?>
