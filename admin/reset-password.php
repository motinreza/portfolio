<?php

require_once "../app/classes/Autoload.php";

$resetPassword = new app\classes\Reset_password();

if(isset($_POST["reset_password"])){
    $resetPassword->resetPasswordAccess($_POST);
}

if(isset($_GET["email"]) && $_GET["token"]){
    $resetPassword->check_email_token($_GET);
}else{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= ucfirst(basename($_SERVER["PHP_SELF"], '.php')); ?> | Motin Reza </title>
    <link rel="stylesheet" href="../assets/backend_file/assets/styles/style.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="../assets/backend_file/assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
    <form method="POST" action="" class="frm-single">
        <div class="inside">
            <div class="title"><strong>Ninja</strong>Admin</div>
            <!-- /.title -->
            <div class="frm-title">Login</div>

            <?php

            if(isset($_SESSION["reset_password"])){
                echo $_SESSION["reset_password"];
                unset($_SESSION["reset_password"]);
            }

            ?>

            <!-- /.frm-input -->
            <div class="frm-input">
                <input type="password" name="password" placeholder="Password" value="" class="frm-inp"><i class="fa fa-lock frm-ico"></i>
                <input type="hidden" name="email" value="<?= $_GET['email']; ?>">
                <span class="text-danger"><?= isset($_SESSION["password_error"]["password"]) ? $_SESSION["password_error"]["password"]:''; unset($_SESSION["password_error"]["password"]); ?></span>
                <span class="text-danger"><?= isset($_SESSION["password_character"]) ? $_SESSION["password_character"]:''; unset($_SESSION["password_character"]) ?></span>
            </div>
            <!-- /.frm-input -->
            <div class="frm-input">
                <input type="password" name="c_password" placeholder="Confirm password" class="frm-inp"><i class="fa fa-lock frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["c_password_error"]["c_password"]) ? $_SESSION["c_password_error"]["c_password"]:''; unset($_SESSION["c_password_error"]["c_password"]); ?></span>
                <span class="text-danger"><?= isset($_SESSION["password_notMatched"]) ? $_SESSION["password_notMatched"]:''; unset($_SESSION["password_notMatched"]); ?></span>
            </div>

            <!-- /.clearfix -->
            <button type="submit" name="reset_password" class="frm-submit">Reset password<i class="fa fa-arrow-circle-right"></i></button>
            <div class="row small-spacing">
                <div class="col-sm-12">
                    <div class="txt-login-with txt-center">If there</div>
                    <!-- /.txt-login-with -->
                </div>
            </div>
            <!-- /.row -->
            <a href="login.php" class="a-link btn btn-primary btn-block text-white"><i class="fa fa-sign-in"></i>Login.</a>
            <div class="frm-footer">NinjaAdmin © 2016.</div>
            <!-- /.footer -->
        </div>
        <!-- .inside -->
    </form>
    <!-- /.frm-single -->
</div><!--/#single-wrapper -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="../assets/backend_file/assets/script/html5shiv.min.js"></script>
<script src="../assets/backend_file/assets/script/respond.min.js"></script>
<![endif]-->
<!--
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/backend_file/assets/scripts/jquery.min.js"></script>
<script src="../assets/backend_file/assets/scripts/modernizr.min.js"></script>
<script src="../assets/backend_file/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/backend_file/assets/plugin/nprogress/nprogress.js"></script>
<script src="../assets/backend_file/assets/plugin/waves/waves.min.js"></script>

<script src="../assets/backend_file/assets/scripts/main.min.js"></script>
</body>
</html>
