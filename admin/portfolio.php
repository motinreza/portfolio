<?php

require_once "include/header.php";

$portfolio = new app\classes\Portfolio();

$allPortfolio = $portfolio->allPortfolio();

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
                <h4 class="box-title">Portfolio add</h4>
                <!-- /.box-title -->
                <form action="insert.php" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description..." required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="portfolio_link" class="form-control" placeholder="Portfolio link">
                    </div>
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
                            <button type="submit" name="portfolio_add" class="btn btn-sm btn-success">Portfolio add</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>

        <div class="col-xs-12">

            <?php

            if(isset($_SESSION["delete"])){
                echo $_SESSION["delete"];
                unset($_SESSION["delete"]);
            }

            ?>

            <div class="box-content" style="font-size:14px;">
                <h4 class="box-title">Services result view</h4>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Portfolio link</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($portfolioRow = mysqli_fetch_assoc($allPortfolio)){
                            ?>
                            <tr>
                                <td><?= $portfolioRow['title']; ?></td>
                                <td><?= $portfolioRow['description']; ?></td>
                                <td><?= $portfolioRow['portfolio_link']; ?></td>
                                <td><img style="width: 100px;" src="../uploads/portfolio/<?= $portfolioRow['image']; ?>" alt=""></td>
                                <td>
                                    <?php
                                    if($portfolioRow["status"] == 'active'){
                                        ?>
                                        <a href="status.php?inactive7=<?= base64_encode($portfolioRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                        <?php
                                    }else{
                                        ?>
                                        <a href="status.php?active7=<?= base64_encode($portfolioRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="portfolio-edit.php?update7=<?= base64_encode($portfolioRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                    <a href="delete.php?delete7=<?= base64_encode($portfolioRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
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

<?php require_once "include/footer.php"; ?>
