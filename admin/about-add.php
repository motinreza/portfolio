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
                <h4 class="box-title">About add</h4>
                <!-- /.box-title -->
                <form action="insert.php" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description_one" id="description_one" cols="30" rows="10" class="form-control" placeholder="Description one..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Description two...</label>
                        <textarea name="description_two" id="editor1" cols="30" rows="10" class="form-control" placeholder="Description two..." required></textarea>
                    </div>
                    <ul class="list-inline">
                        <li class="form-group">
                            <input type="text" name="facebook" class="form-control" placeholder="Facebook" required>
                        </li>
                        <li class="form-group">
                            <input type="text" name="twitter" class="form-control" placeholder="Twitter" required>
                        </li>
                        <li class="form-group">
                            <input type="text" name="instagram" class="form-control" placeholder="Instagram" required>
                        </li>
                        <li class="form-group">
                            <input type="text" name="behance" class="form-control" placeholder="Behance" required>
                        </li>
                        <li class="form-group">
                            <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" required>
                        </li>
                        <li class="form-group">
                            <input type="text" name="fiverr" class="form-control" placeholder="Fiverr" required>
                        </li>
                        <li class="form-group">
                            <input type="text" name="resume" class="form-control" placeholder="Resume" required>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <div class="row">
                            <!-- /.box-title -->
                            <div class="card-content">
                                <div class="form-group">
                                    <input type="file" name="image" id="input-file-now" class="dropify" required>
                                </div>
                                <p class="margin-top-10 text-center">Upload your personal photo file</p>
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
                            <button type="submit" name="about_add" class="btn btn-sm btn-success">about_add</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
