<?php

require_once "include/header.php";

$editAbout = new app\classes\Edit_about();

$id = base64_decode($_GET["update"]);
$aboutAll = $editAbout->aboutAll($id);
$rowAbout = mysqli_fetch_assoc($aboutAll);

if(isset($_POST["edit_about"])){
    $editAbout->editAboutaccess($_POST);
    header("location: about-view.php");
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
                <h4 class="box-title">About add</h4>
                <!-- /.box-title -->
                <form action="" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $rowAbout['id']; ?>">
                        <input type="text" name="title" class="form-control" value="<?= $rowAbout['title']; ?>" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <textarea name="description_one" id="description_one" cols="30" rows="10" class="form-control" placeholder="Description one..."><?= $rowAbout['description_one']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea style="height:500px;" name="description_two" id="editor1" cols="30" rows="10" class="form-control" placeholder="Description two..."><?= $rowAbout['description_two']; ?></textarea>
                    </div>
                    <ul class="list-inline">
                        <li class="form-group">
                            <input type="text" name="facebook" class="form-control" value="<?= $rowAbout['facebook']; ?>" placeholder="Facebook">
                        </li>
                        <li class="form-group">
                            <input type="text" name="twitter" class="form-control" value="<?= $rowAbout['twitter']; ?>" placeholder="Twitter">
                        </li>
                        <li class="form-group">
                            <input type="text" name="instagram" class="form-control" value="<?= $rowAbout['instagram']; ?>" placeholder="Instagram">
                        </li>
                        <li class="form-group">
                            <input type="text" name="behance" class="form-control" value="<?= $rowAbout['behance']; ?>" placeholder="Behance">
                        </li>
                        <li class="form-group">
                            <input type="text" name="linkedin" class="form-control" value="<?= $rowAbout['linkedin']; ?>" placeholder="Linkedin">
                        </li>
                        <li class="form-group">
                            <input type="text" name="fiverr" class="form-control" value="<?= $rowAbout['fiverr']; ?>" placeholder="Fiverr">
                        </li>
                        <li class="form-group">
                            <input type="text" name="resume" class="form-control" value="<?= $rowAbout['resume']; ?>" placeholder="Resume">
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <div class="row">
                            <!-- /.box-title -->
                            <div class="card-content">
                                <div class="form-group text-center">
                                    <input type="hidden" name="old_file" value="<?= $rowAbout['image']; ?>">
                                    <input type="file" name="image" id="input-file-now" class="dropify">
                                    <img class="" style="width: 80px;" src="../uploads/about/<?= $rowAbout['image']; ?>" alt="">
                                </div>
                                <p class="margin-top-10 text-center">Upload your file</p>
                            </div>
                            <!-- /.card-content -->
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status" id="active" <?= $rowAbout['status'] == 'active' ? 'checked':''; ?> value="active">
                                <label for="active">Active</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="status" id="inactive" <?= $rowAbout['status'] == 'inactive' ? 'checked':''; ?> value="inactive">
                                <label for="inactive">Inactive</label>
                            </div>
                        </div>

                        <li class="form-group margin-top-10">
                            <button type="submit" name="edit_about" class="btn btn-sm btn-success">Edit about</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
