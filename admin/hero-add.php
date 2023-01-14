<?php require_once "include/header.php"; ?>

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
                <form action="insert.php" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="text" name="owner_name" class="form-control" placeholder="Owner name" required>
                    </div>
                    <ul class="list-inline">
                        <div class="row">
                            <div class="col-md-4">
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <div class="form-group">
                                        <input type="file" name="shortcut" id="input-file-now" class="dropify" required>
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your shortcut icon file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <div class="form-group">
                                        <input type="file" name="logo" id="input-file-now" class="dropify" required>
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your logo file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <div class="col-md-4">
                                <!-- /.box-title -->
                                <div class="card-content">
                                    <div class="form-group">
                                        <input type="file" name="background" id="input-file-now" class="dropify" required>
                                    </div>
                                    <p class="margin-top-10 text-center">Upload your background file</p>
                                </div>
                                <!-- /.card-content -->
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status" id="active" value="active" required>
                                <label for="active">Active</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="status" id="inactive" value="inactive" required>
                                <label for="inactive">Inactive</label>
                            </div>
                        </div>

                        <li class="form-group margin-top-10">
                            <button type="submit" name="hero_add" class="btn btn-sm btn-success">Add hero</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
