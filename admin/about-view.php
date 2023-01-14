<?php

require_once "include/header.php";

$about = new app\classes\About();
$allAbout = $about->allAbout();

?>

<div id="wrapper">
    <div class="main-content">

        <div class="row small-spacing">

            <div class="col-xs-12">

                <?php

                if(isset($_SESSION["delete"])){
                    echo $_SESSION["delete"];
                    unset($_SESSION["delete"]);
                }

                ?>

                <div class="box-content" style="font-size:14px;">
                    <h4 class="box-title">About result view</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="">Edit</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description one</th>
                                <th>Description two</th>
                                <th>Social media</th>
                                <th>image</th>
                                <th>Resume or CV</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($aboutRow = mysqli_fetch_assoc($allAbout)){
                                ?>
                                <tr>
                                    <td><?= $aboutRow["title"]; ?></td>
                                    <td><?= $aboutRow["description_one"]; ?></td>
                                    <td><?= $aboutRow["description_two"]; ?></td>
                                    <td>
                                        <ul class="contact-social text-center list-inline">
                                            <li><a href="#" data-toggle="tooltip" class="fa fa-facebook" data-placement="top" data-original-title="<?= $aboutRow['facebook']; ?>"></a></li>
                                            <li><a href="#" data-toggle="tooltip" class="fa fa-instagram bg-primary"" data-placement="top" data-original-title="<?= $aboutRow['instagram']; ?>"></a></li>
                                            <li><a href="#" data-toggle="tooltip" class="fa fa-twitter" data-placement="top" data-original-title="<?= $aboutRow['twitter']; ?>"></a></li>
                                            <li><a href="#" data-toggle="tooltip" class="fa fa-behance bg-primary" data-placement="top" data-original-title="<?= $aboutRow['behance']; ?>"></a></li>
                                            <li><a href="#" data-toggle="tooltip" class="fa fa-linkedin bg-info" data-placement="top" data-original-title="<?= $aboutRow['linkedin']; ?>"></a></li>
                                        </ul>
                                    </td>
                                    <td><img style="width: 100px;" src="../uploads/about/<?= $aboutRow["image"]; ?>" alt=""></td>
                                    <td>
                                        <iframe style="width: 100px;" src="https://drive.google.com/file/d/142puPu9Jh4CItspGQZRfBSP6DC9DEFY0/preview" width="640" height="480" allow="autoplay"></iframe>
                                    </td>
                                    <td>
                                        <?php
                                        if($aboutRow["status"] == 'active'){
                                            ?>
                                            <a href="status.php?inactive2=<?= base64_encode($aboutRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="status.php?active2=<?= base64_encode($aboutRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="about-edit.php?update=<?= base64_encode($aboutRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                        <a href="delete.php?delete=<?= base64_encode($aboutRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
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
</div>

<?php require_once "include/footer.php"; ?>
