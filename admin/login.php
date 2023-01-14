<?php

require_once "../app/classes/Autoload.php";

if(isset($_SESSION["username"])){
    header("location: index.php");
}

$login = new app\classes\Login();

if(isset($_POST["login"])){
    $login->loginAccess($_POST);
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

            if(isset($_SESSION["login_error"])){
                echo $_SESSION["login_error"];
                unset($_SESSION["login_error"]);
            }

            ?>

            <!-- /.frm-title -->
            <div class="frm-input">
                <input type="text" name="username" placeholder="Username" value="<?= isset($_COOKIE['username']) ? $_COOKIE['username']:''; ?>" class="frm-inp"><i class="fa fa-user frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["username_error"]["username"]) ? $_SESSION["username_error"]["username"]:''; unset($_SESSION["username_error"]["username"]); ?></span>
            </div>
            <!-- /.frm-input -->
            <div class="frm-input">
                <input type="password" name="password" placeholder="Password" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password']:''; ?>" class="frm-inp"><i class="fa fa-lock frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["password_error"]["password"]) ? $_SESSION["password_error"]["password"]:''; unset($_SESSION["password_error"]["password"]); ?></span>
            </div>
            <!-- /.frm-input -->
            <div class="clearfix margin-bottom-20">
                <div class="pull-left">
                    <div class="checkbox primary">
                        <input type="checkbox" name="rememberMe" id="rememberMe" <?= isset($_COOKIE['username']) ? 'checked':''; ?> ><label for="rememberMe">Remember me</label>
                    </div>
                    <!-- /.checkbox -->
                </div>
                <!-- /.pull-left -->
                <div class="pull-right"><a href="reset.php" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
                <!-- /.pull-right -->
            </div>
            <!-- /.clearfix -->
            <button type="submit" name="login" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
            <div class="row small-spacing">
                <div class="col-sm-12">
                    <div class="txt-login-with txt-center">or Create new account</div>
                    <!-- /.txt-login-with -->
                </div>
            </div>
            <!-- /.row -->
            <a href="registration.php" class="a-link btn btn-primary btn-block text-white"><i class="fa fa-key"></i>Registration</a>
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
