<?php require_once "include/header.php"; ?>

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
                <h4 class="box-title">Services add</h4>
                <!-- /.box-title -->
                <form action="insert.php" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description..." required></textarea>
                    </div>

                    <ul class="list-inline">
                        <div class="row">
                            <!-- /.box-title -->
                            <div class="card-content">
                                <div class="form-group">
                                    <input type="file" name="image" id="input-file-now" class="dropify" required>
                                </div>
                                <p class="margin-top-10 text-center">Upload services photo file</p>
                            </div>
                            <!-- /.card-content -->
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
                            <button type="submit" name="services_add" class="btn btn-sm btn-success">Services add</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
