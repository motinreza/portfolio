<?php

require_once "include/header.php";

$editServices = new app\classes\Edit_services();

if(isset($_POST["services_edit"])){
    $editServices->editServicesId($_POST);
    header("location: services-view.php");
}

$id = base64_decode($_GET["update5"]);
$editServices = $editServices->editServicesAll($id);
$servicesRow = mysqli_fetch_assoc($editServices);



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
                <h4 class="box-title">Services edit</h4>
                <!-- /.box-title -->
                <form action="" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $servicesRow['id']; ?>">
                        <input type="text" name="title" class="form-control" value="<?= $servicesRow['title']; ?>" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description..."><?= $servicesRow['description']; ?></textarea>
                    </div>

                    <ul class="list-inline">
                        <div class="row">
                            <!-- /.box-title -->
                            <div class="card-content">
                                <div class="form-group">
                                    <input type="hidden" name="old_file" value="<?= $servicesRow['image']; ?>">
                                    <input type="file" name="image" id="input-file-now" class="dropify">
                                    <img style="width: 80px;" src="../uploads/services/<?= $servicesRow['image']; ?>" alt="">
                                </div>
                                <p class="margin-top-10 text-center">Upload services photo file</p>
                            </div>
                            <!-- /.card-content -->
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status" id="active" <?= $servicesRow['status'] == 'active' ? 'checked':''; ?> value="active">
                                <label for="active">Active</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="status" id="inactive" <?= $servicesRow['status'] == 'inactive' ? 'checked':''; ?> value="inactive">
                                <label for="inactive">Inactive</label>
                            </div>
                        </div>

                        <li class="form-group margin-top-10">
                            <button type="submit" name="services_edit" class="btn btn-sm btn-success">Services edit</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
