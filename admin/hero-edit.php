<?php

require_once "include/header.php";

$editHero = new app\classes\Edit_hero();

$id = base64_decode($_GET["editHero"]);
$heroAll = $editHero->heroAll($id);
$heroRow = mysqli_fetch_assoc($heroAll);

if(isset($_POST["hero_edit"])){
    $editHero->editHero($_POST);
    header("location: hero-view.php");
}

?>

<div id="wrapper">
    <div class="main-content">

        <?php

        if(isset($_SESSION["hero_add"])){
            echo $_SESSION["hero_add"];
            unset($_SESSION["hero_add"]);
        }

        ?>

        <!-- /.col-md-3 col-xs-12 -->
        <div class="col-md-12 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Hero add</h4>
                <!-- /.box-title -->
                <form action="" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $heroRow['id']; ?>">
                        <input type="text" name="owner_name" class="form-control" value="<?= $heroRow['owner_name']; ?>" placeholder="Owner name">
                    </div>
                    <ul class="list-inline">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <div class="form-group">
                                        <input type="hidden" name="old_shortcut" value="<?= $heroRow['shortcut']; ?>">
                                        <input type="file" name="shortcut" id="input-file-now" class="dropify">
                                        <img style="width: 80px" src="../uploads/hero/<?= $heroRow['shortcut']; ?>" alt="">
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your logo file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>

                            <div class="col-md-4">
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <div class="form-group">
                                        <input type="hidden" name="old_logo" value="<?= $heroRow['logo']; ?>">
                                        <input type="file" name="logo" id="input-file-now" class="dropify">
                                        <img style="width: 80px;" src="../uploads/hero/<?= $heroRow['logo']; ?>" alt="">
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your logo file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <div class="form-group">
                                        <input type="hidden" name="old_background" value="<?= $heroRow['background']; ?>">
                                        <input type="file" name="background" id="input-file-now" class="dropify">
                                        <img style="width: 80px;" src="../uploads/hero/<?= $heroRow['background']; ?>" alt="">
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your background file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status" id="active" <?= $heroRow['status'] == 'active' ? 'checked':''; ?> value="active">
                                <label for="active">Active</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="status" id="inactive" <?= $heroRow['status'] == 'inactive' ? 'checked':''; ?> value="inactive">
                                <label for="inactive">Inactive</label>
                            </div>
                        </div>

                        <li class="form-group margin-top-10">
                            <button type="submit" name="hero_edit" class="btn btn-sm btn-success">Edit hero</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
