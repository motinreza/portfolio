<?php

require_once "include/header.php";

$profile = new app\classes\Profile();
$profileAccess = $profile->profileAccess();
$profileRow = mysqli_fetch_assoc($profileAccess);

?>

<div id="wrapper">
    <div class="main-content">

        <div class="col-md-3 col-xs-12">
            <div class="box-content bordered primary margin-bottom-20">
                <div class="profile-avatar">
                    <img src="../uploads/profile/<?= $profileRow['image']; ?>" alt="">
                    <h3 class="text-center"><strong><?= $profileRow['name']; ?></strong></h3>
                    <p class="text-center"><?= $profileRow['title']; ?></p>
                    <ul class="contact-social text-center list-inline">
                        <li><a href="tell:<?= $profileRow['phone']; ?>" data-toggle="tooltip" data-placement="top" title="" class="fa fa-phone" data-original-title="<?= $profileRow['phone']; ?>"></a></li>
                        <li><a href="mailto:<?= $profileRow['email']; ?>" data-toggle="tooltip" data-placement="top" title="" class="fa fa-envelope" data-original-title="<?= $profileRow['email']; ?>"></a></li>
                        <li><a href="<?= $profileRow['facebook']; ?>" target="_blank" data-toggle="tooltip" class="fa fa-facebook" data-placement="top" title="" data-original-title="<?= $profileRow['facebook']; ?>"></a></li>
                        <li><a href="<?= $profileRow['twitter']; ?>" target="_blank" data-toggle="tooltip" class="fa fa-twitter" data-placement="top" title="" data-original-title="<?= $profileRow['twitter']; ?>"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.col-md-3 col-xs-12 -->
        <div class="col-md-9 col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-content card">
                        <h4 class="box-title"><i class="fa fa-user ico"></i>Profile</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="edit-profile.php">Edit</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="card-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Name:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><?= $profileRow['name']; ?></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Title:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><?= $profileRow['title']; ?></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Email:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><?= $profileRow['email']; ?></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Address:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><?= $profileRow['address']; ?></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Birthday:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><?= $profileRow['birthday']; ?></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Interest:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><?= $profileRow['interest']; ?></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Website:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><a><?= $profileRow['website']; ?></a></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-5"><label>Phone:</label></div>
                                        <!-- /.col-xs-5 -->
                                        <div class="col-xs-7"><?= $profileRow['phone']; ?></div>
                                        <!-- /.col-xs-7 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-content -->
                    </div>
                    <!-- /.box-content card -->
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once "include/footer.php"; ?>
