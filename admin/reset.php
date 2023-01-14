<?php

require_once "../app/classes/Autoload.php";

$reset = new app\classes\Reset();

if(isset($_POST["reset"])){
    $reset->resetAccess($_POST);
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

            if(isset($_SESSION["forgot_error"])){
                echo $_SESSION["forgot_error"];
                unset($_SESSION["forgot_error"]);
            }

            ?>

            <!-- /.frm-title -->
            <div class="frm-input">
                <input type="email" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email']:''; ?>" class="frm-inp"><i class="fa fa-envelope frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["email_error"]["email"]) ? $_SESSION["email_error"]["email"]:''; unset($_SESSION["email_error"]["email"]); ?></span>
                <span class="text-danger"><?=  isset($_SESSION["email_check"]) ? $_SESSION["email_check"]:''; unset($_SESSION["email_check"]); ?></span>
            </div>
            <!-- /.clearfix -->
            <button type="submit" name="reset" class="frm-submit">Reset password<i class="fa fa-arrow-circle-right"></i></button>
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
