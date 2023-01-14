<?php

require_once "include/header.php";
use app\classes\Database;

$blog = new app\classes\Blog();
$blogCategoryName = $blog->blogCategoryName();

$blogAll = $blog->blogAll();

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
                        <select name="cat_id" id="" class="form-control">
                            <option value="">Selected</option>
                            <?php
                            while($bCnRow = mysqli_fetch_assoc($blogCategoryName)){
                                ?>
                                <option value="<?= $bCnRow['id']; ?>"><?= $bCnRow['category_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" required onkeyup="string_to_slug(this.value)">
                    </div>
                    <div class="form-group">
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" required>
                    </div>

                    <!--<div class="form-group">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Content..." required></textarea>
                    </div>-->

                    <div class="form-group">
                        <label for="">Content...</label>
                        <textarea name="content" id="editor1" cols="30" rows="10" class="form-control" required></textarea>
                    </div>

                    <div class="row">
                        <!-- /.box-title -->
                        <div class="card-content">
                            <div class="form-group">
                                <input type="file" name="image" id="input-file-now" class="dropify" required>
                            </div>
                            <p class="margin-top-10 text-center">Upload your personal photo file</p>
                        </div>
                        <!-- /.card-content -->
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
                        <button type="submit" name="blog_add" class="btn btn-sm btn-success">Blog add</button>
                    </div>
                </form>
                <!-- /.card-content -->
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
                <h4 class="box-title">Your Works and Review</h4>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category name</th>
                            <th>Slug</th>
                            <th>Content</th>
                            <th>Username</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($blogAllRow = mysqli_fetch_assoc($blogAll)){
                            ?>
                            <tr>
                                <td><?= $blogAllRow['title']; ?></td>
                                <td>
                                    <?php

                                    $cat_id = $blogAllRow['cat_id'];
                                    $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog_category` WHERE `id` = '$cat_id' ");
                                    $cat_row = mysqli_fetch_assoc($result);
                                    echo $cat_row['category_name'];

                                    ?>
                                </td>
                                <td><?= $blogAllRow['slug']; ?></td>
                                <td><?= $blogAllRow['content']; ?></td>
                                <td><?= $blogAllRow['username']; ?></td>
                                <td><img style="width: 80px;" src="../uploads/blog/<?= $blogAllRow['image']; ?>" alt=""></td>
                                <td>
                                    <?php
                                    if($blogAllRow["status"] == 'active'){
                                        ?>
                                        <a href="status.php?inactive10=<?= base64_encode($blogAllRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                        <?php
                                    }else{
                                        ?>
                                        <a href="status.php?active10=<?= base64_encode($blogAllRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="blog-edit.php?update=<?= base64_encode($blogAllRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                    <a href="delete.php?delete10=<?= base64_encode($blogAllRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
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
