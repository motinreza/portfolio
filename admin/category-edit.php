<?php

require_once "include/header.php";

$editHero = new app\classes\Edit_hero();

$id = base64_decode($_GET["update3"]);
$editCategory = $editHero->categoryAll($id);
$categoryRow = mysqli_fetch_assoc($editCategory);

if(isset($_POST["edit_category"])){
    $editHero->categoryEdit($_POST);
}

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
                <form action="" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $categoryRow['id']; ?>">
                        <input type="text" name="category_name" class="form-control" placeholder="Category name" value="<?= $categoryRow['category_name']; ?>" required>
                    </div>
                    <ul class="list-inline">
                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status" id="active" value="active" <?= $categoryRow['status'] == 'active' ? 'checked':''; ?> required>
                                <label for="active">Active</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="status" id="inactive" value="inactive" <?= $categoryRow['status'] == 'inactive' ? 'checked':''; ?> required>
                                <label for="inactive">Inactive</label>
                            </div>
                        </div>

                        <li class="form-group margin-top-10">
                            <button type="submit" name="edit_category" class="btn btn-sm btn-success">Edit category</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
