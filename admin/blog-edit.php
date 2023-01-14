<?php

require_once "include/header.php";
use app\classes\Database;

$blog = new app\classes\Blog();
$blogCategoryName = $blog->blogCategoryName();

$blogAll = $blog->blogAll();


$id = base64_decode($_GET["update"]);
$blogId = $blog->blogId($id);
$blogRow = mysqli_fetch_assoc($blogId);

if(isset($_POST["blog_edit"])){
    $blogEdit = $blog->blogEdit($_POST);
    header("location: blog.php");
}

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
                <form action="" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <select name="cat_id" id="" class="form-control">
                            <option value="">Selected</option>
                            <?php
                            while($bCnRow = mysqli_fetch_assoc($blogCategoryName)){
                                ?>
                                <option <?= $blogRow['cat_id'] == $bCnRow['id'] ? 'selected':''; ?> value="<?= $bCnRow['id']; ?>"><?= $bCnRow['category_name']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $blogRow['id']; ?>">
                        <input type="text" name="title" class="form-control" placeholder="Title" value="<?= $blogRow['title']; ?>" onkeyup="string_to_slug(this.value)">
                    </div>
                    <div class="form-group">
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug" value="<?= $blogRow['slug']; ?>">
                    </div>

                    <div class="form-group">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Content..."><?= $blogRow['content']; ?></textarea>
                    </div>

                    <div class="row">
                        <!-- /.box-title -->
                        <div class="card-content">
                            <div class="form-group">
                                <input type="hidden" name="old_file" value="<?= $blogRow['image']; ?>">
                                <input type="file" name="image" id="input-file-now" class="dropify">
                                <img style="width: 80px;" src="../uploads/blog/<?= $blogRow['image']; ?>" alt="">
                            </div>
                            <p class="margin-top-10 text-center">Upload your personal photo file</p>
                        </div>
                        <!-- /.card-content -->
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <input type="radio" name="status" id="active" value="active" <?= $blogRow['status'] == 'active' ? 'checked':''; ?> >
                            <label for="active">Active</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="status" id="inactive" value="inactive" <?= $blogRow['status'] == 'inactive' ? 'checked':''; ?> >
                            <label for="inactive">Inactive</label>
                        </div>
                    </div>

                    <div class="form-group margin-top-10">
                        <button type="submit" name="blog_edit" class="btn btn-sm btn-success">Blog edit</button>
                    </div>
                </form>
                <!-- /.card-content -->
            </div>
        </div>

    </div>
</div>


<?php require_once "include/footer.php"; ?>
