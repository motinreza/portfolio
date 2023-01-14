<?php

require_once "include/header.php";

$hero = new app\classes\Hero();
$heroAll = $hero->heroAll();

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
                            <th>Owner name</th>
                            <th>Shortcut</th>
                            <th>Logo image</th>
                            <th>Background image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($heroRow = mysqli_fetch_assoc($heroAll)){
                                ?>
                                <tr>
                                    <td><?= $heroRow["owner_name"]; ?></td>
                                    <td><img style="width: 100px;" src="../uploads/hero/<?= $heroRow["shortcut"]; ?>" alt=""></td>
                                    <td><img style="width: 100px;" src="../uploads/hero/<?= $heroRow["logo"]; ?>" alt=""></td>
                                    <td><img style="width: 100px;" src="../uploads/hero/<?= $heroRow["background"]; ?>" alt=""></td>
                                    <td>
                                        <?php
                                        if($heroRow["status"] == 'active'){
                                            ?>
                                            <a href="status.php?inactive=<?= base64_encode($heroRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="status.php?active=<?= base64_encode($heroRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="hero-edit.php?editHero=<?= base64_encode($heroRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                        <a href="delete.php?delete2=<?= base64_encode($heroRow['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
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
