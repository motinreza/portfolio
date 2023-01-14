<?php

require_once "include/header.php";

$portfolio = new app\classes\Portfolio();


$id = base64_decode($_GET["update7"]);
$portfolioEditid = $portfolio->portfolioEditid($id);
$portfolioRow = mysqli_fetch_assoc($portfolioEditid);

if(isset($_POST["portfolio_edit"])){
    $portfolio->portfolioEdit($_POST);
    header("location: portfolio.php");
}


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
                <form action="" enctype="multipart/form-data" method="POST" class="card-content">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $portfolioRow['id']; ?>">
                        <input type="text" name="title" class="form-control" value="<?= $portfolioRow['title']; ?>" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description..."><?= $portfolioRow['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="portfolio_link" class="form-control" value="<?= $portfolioRow['portfolio_link']; ?>" placeholder="Portfolio link">
                    </div>
                    <ul class="list-inline">
                        <div class="row">
                            <!-- /.box-title -->
                            <div class="card-content">
                                <div class="form-group">
                                    <input type="hidden" name="old_file" value="<?= $portfolioRow['image']; ?>">
                                    <input type="file" name="image" id="input-file-now" class="dropify">
                                    <img style="width: 80px;" src="../uploads/portfolio/<?= $portfolioRow['image']; ?>" alt="">
                                </div>
                                <p class="margin-top-10 text-center">Upload your personal photo file</p>
                            </div>
                            <!-- /.card-content -->
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status" id="active" <?= $portfolioRow['status'] == 'active' ? 'checked':''; ?> value="active">
                                <label for="active">Active</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="status" id="inactive" <?= $portfolioRow['status'] == 'inactive' ? 'checked':''; ?> value="inactive">
                                <label for="inactive">Inactive</label>
                            </div>
                        </div>

                        <li class="form-group margin-top-10">
                            <button type="submit" name="portfolio_edit" class="btn btn-sm btn-success">Portfolio edit</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
