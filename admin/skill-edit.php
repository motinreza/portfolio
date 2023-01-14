<?php

require_once "include/header.php";

$skill = new app\classes\Skill();

$id = base64_decode($_GET["update4"]);
$editAllskill = $skill->editAllskill($id);
$editRow = mysqli_fetch_assoc($editAllskill);

if(isset($_POST["skill_save"])){
    $skill->editSkill($_POST);
    header("location: skill.php");
}

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
                    <form action="" method="POST" class="card-content">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="id" value="<?= $editRow['id']; ?>">
                                <input type="text" name="skill_name" class="form-control" value="<?= $editRow['skill_name']; ?>" placeholder="Skill name">
                            </div>
                            <div class="col-md-6">
                                <select name="percent" class="form-control" id="">
                                    <?php

                                    for($number = 1; $number <= 100; $number++){
                                        if($number % 5 == 0){
                                            ?>
                                            <option <?= $number == $editRow['percent'] ? 'selected':''; ?> value="<?= $number; ?>"><?= $number; ?>%</option>
                                            <?php
                                        }
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status" id="active" <?= $editRow['status'] == 'active' ? 'checked':''; ?> value="active" required>
                                <label for="active">Active</label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="status" id="inactive" <?= $editRow['status'] == 'inactive' ? 'checked':''; ?> value="inactive" required>
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
        </div>
    </div>
</div>

<?php require_once "include/footer.php"; ?>
