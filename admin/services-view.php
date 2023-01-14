<?php

require_once "include/header.php";

$services = new app\classes\Services();
$allServices = $services->allServices();


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
                    <h4 class="box-title">Services result view</h4>
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
                                <th>Description</th>
                                <th>Images</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($servicesRow = mysqli_fetch_assoc($allServices)){
                                ?>
                                <tr>
                                    <td><?= $servicesRow['title']; ?></td>
                                    <td><?= $servicesRow['description']; ?></td>
                                    <td><img style="width: 100px;" src="../uploads/services/<?= $servicesRow['image']; ?>" alt=""></td>
                                    <td>
                                        <?php
                                        if($servicesRow["status"] == 'active'){
                                            ?>
                                            <a href="status.php?inactive5=<?= base64_encode($servicesRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="status.php?active5=<?= base64_encode($servicesRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="services-edit.php?update5=<?= base64_encode($servicesRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                        <a href="delete.php?delete5=<?= base64_encode($servicesRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
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
