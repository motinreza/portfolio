<?php

require_once "include/header.php";

$editProfile = new app\classes\Edit_profile();

if(isset($_POST["edit_profile"])){
    $editProfile->editProfileAccess($_POST);
}

$profile = new app\classes\Profile();
$profileAccess = $profile->profileAccess();
$profileRow = mysqli_fetch_assoc($profileAccess);

?>

<div id="wrapper">
    <div class="main-content">
        <form method="POST" enctype="multipart/form-data" action="" class="row small-spacing">
            <div class="col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Section 01</h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                        <ul class="list-inline">
                            <li class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="<?= $profileRow['name']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="<?= $profileRow['title']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="Address" value="<?= $profileRow['address']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="number" name="phone" class="form-control" placeholder="Phone" value="<?= $profileRow['phone']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="birthday" class="form-control" placeholder="Birthday" value="<?= $profileRow['birthday']; ?>" id="datepicker2">
                            </li>
                            <li class="form-group">
                                <input type="text" name="interest" class="form-control" placeholder="Interest" value="<?= $profileRow['interest']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $profileRow['email']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="website" class="form-control" placeholder="Website" value="<?= $profileRow['website']; ?>">
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xs-12 -->
            <div class="col-lg-6 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Section 02</h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                        <ul class="list-inline">
                            <li class="form-group">
                                <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="<?= $profileRow['facebook']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="<?= $profileRow['twitter']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?= $profileRow['instagram']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" value="<?= $profileRow['linkedin']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="behance" class="form-control" placeholder="Behance" value="<?= $profileRow['behance']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="skype" class="form-control" placeholder="Skype" value="<?= $profileRow['skype']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="fiverr" class="form-control" placeholder="Fiverr" value="<?= $profileRow['fiverr']; ?>">
                            </li>
                            <li class="form-group">
                                <input type="text" name="youtube" class="form-control" placeholder="Youtube" value="<?= $profileRow['youtube']; ?>">
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content card white -->
            </div>
            <!-- /.col-xs-12 -->
            <div class="col-lg-6 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Section 03</h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                        <div class="wrapper text-center">
                            <input type="hidden" name="old_file" value="<?= $profileRow['image']; ?>">
                            <input type="file" name="image" id="input-file-now" class="dropify">
                            <img style='width:50px;' src="../uploads/profile/<?= $profileRow['image']; ?>" alt="">
                        </div>
                        <p class="margin-top-10 text-center">Upload your file</p>
                    </div>
                    <!-- /.card-content -->
                </div>
            </div>
            <div class="form-group" style="text-align: center">
                <button type="submit" name="edit_profile" class="btn btn-info waves-effect waves-light">Save</button>
            </div>
            <!-- /.col-lg-6 col-xs-12 -->
        </form>

    </div>
</div>

<?php require_once "include/footer.php"; ?>