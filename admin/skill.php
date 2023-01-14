<?php

require_once "include/header.php";

$skill = new app\classes\Skill();
$allSkill = $skill->allSkill();

?>

<!-- /#message-popup -->
<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">

            <?php

            if(isset($_SESSION["skill_add"])){
                echo $_SESSION["skill_add"];
                unset($_SESSION["skill_add"]);
            }

            ?>

            <!-- /.col-md-3 col-xs-12 -->
            <div class="col-md-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Add a New Skill</h4>
                    <!-- /.box-title -->
                    <form action="insert.php" method="POST" class="card-content">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="skill_name" class="form-control" placeholder="Skill name">
                            </div>
                            <div class="col-md-6">
                                <select name="percent" class="form-control" id="">
                                    <?php

                                    for($number = 1; $number<=100; $number++){
                                        if($number % 5 == 0){
                                            ?>
                                            <option value="<?= $number; ?>"><?= $number; ?>%</option>
                                            <?php
                                        }
                                    }

                                    ?>
                                </select>
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
                        <div class="form-group">
                            <button type="submit" name="skill_save" class="btn btn-success">Save</button>
                        </div>
                    </form>
                    <!-- /.card-content -->
                </div>
            </div>

            <div class="col-xs-12">
                <div class="box-content" style="font-size:14px;">
                    <h4 class="box-title">All skill</h4>
                    <!-- /.dropdown js__dropdown -->
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Percent</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($skillRow = mysqli_fetch_assoc($allSkill)){
                                ?>
                                <tr>
                                    <td><?= $skillRow['skill_name']; ?></td>
                                    <td><?= $skillRow['percent']; ?>%</td>
                                    <td>
                                        <?php
                                        if($skillRow["status"] == 'active'){
                                            ?>
                                            <a href="status.php?inactive4=<?= base64_encode($skillRow['id']); ?>" class="btn btn-primary btn-xs">Active</a>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="status.php?active4=<?= base64_encode($skillRow['id']); ?>" class="btn btn-warning btn-xs">Inactive</a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="skill-edit.php?update4=<?= base64_encode($skillRow['id']); ?>" class="btn btn-info btn-xs">Edit</a><br><br>
                                        <a href="delete.php?delete4=<?= base64_encode($skillRow['id']); ?>" class="btn btn-warning btn-xs">Delete</a>
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
