<?php

require_once "include/header.php";

$blog = new app\classes\Blog();

$id = base64_decode($_GET["update9"]);
$blogCategoryId = $blog->blogCategoryId($id);
$blogRow = mysqli_fetch_assoc($blogCategoryId);

if(isset($_POST["category_edit"])){
    $blog->blogCategoryEdit($_POST);
    header("location: blog-category.php");
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
                        <input type="hidden" name="id" value="<?= $blogRow['id']; ?>">
                        <input type="text" name="category_name" class="form-control" value="<?= $blogRow['category_name']; ?>" placeholder="Category name" required onkeyup="string_to_slug(this.value)">
                    </div>
                    <div class="form-group">
                        <input type="text" name="slug" id="slug" class="form-control" value="<?= $blogRow['slug']; ?>" placeholder="Slug" required>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <input type="radio" name="status" id="active" <?= $blogRow['status'] == 'active' ? 'checked':''; ?> value="active" required>
                            <label for="active">Active</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="status" id="inactive" <?= $blogRow['status'] == 'inactive' ? 'checked':''; ?> value="inactive" required>
                            <label for="inactive">Inactive</label>
                        </div>
                    </div>

                    <div class="form-group margin-top-10">
                        <button type="submit" name="category_edit" class="btn btn-sm btn-success">Category Edit</button>
                    </div>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>