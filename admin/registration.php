<?php

require_once "../app/classes/Autoload.php";

$registration = new app\classes\Registration();

if(isset($_POST["register"])){
    $registration->registrationAccess($_POST);
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
            <div class="frm-title">Register</div>

            <?php

            if(isset($_SESSION["registered"])){
                echo $_SESSION["registered"];
                unset($_SESSION["registered"]);
            }
            if(isset($_SESSION["notRegistered"])){
                echo $_SESSION["notRegistered"];
                unset($_SESSION["notRegistered"]);
            }

            ?>

            <!-- /.frm-title -->
            <div class="frm-input">
                <input type="email" name="email" placeholder="Email" value="" class="frm-inp"><i class="fa fa-envelope frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["email_error"]["email"]) ? $_SESSION["email_error"]["email"]:''; unset($_SESSION["email_error"]["email"]); ?></span>
                <span class="text-danger"><?= isset($_SESSION["email_exists"]) ? $_SESSION["email_exists"]:''; unset($_SESSION["email_exists"]); ?></span>
            </div>
            <!-- /.frm-input -->
            <div class="frm-input">
                <input type="text" name="username" placeholder="Username" value="" class="frm-inp"><i class="fa fa-user frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["username_error"]["username"]) ? $_SESSION["username_error"]["username"]:''; unset($_SESSION["username_error"]["username"]); ?></span>
                <span class="text-danger"><?= isset($_SESSION["username_character"]) ? $_SESSION["username_character"]:''; unset($_SESSION["username_character"]); ?></span>
            </div>
            <!-- /.frm-input -->
            <div class="frm-input">
                <input type="password" name="password" placeholder="Password" value="" class="frm-inp"><i class="fa fa-lock frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["password_error"]["password"]) ? $_SESSION["password_error"]["password"]:''; unset($_SESSION["password_error"]["password"]); ?></span>
                <span class="text-danger"><?= isset($_SESSION["password_character"]) ? $_SESSION["password_character"]:''; unset($_SESSION["password_character"]); ?></span>

            </div>
            <!-- /.frm-input -->
            <div class="frm-input">
                <input type="password" name="c_password" placeholder="Confirm password" class="frm-inp"><i class="fa fa-lock frm-ico"></i>
                <span class="text-danger"><?= isset($_SESSION["c_password_error"]["c_password"]) ? $_SESSION["c_password_error"]["c_password"]:''; unset($_SESSION["c_password_error"]["c_password"]); ?></span>
                <span class="text-danger"><?= isset($_SESSION["password_notMatched"]) ? $_SESSION["password_notMatched"]:''; unset($_SESSION["password_notMatched"]); ?></span>
            </div>
            <!-- /.clearfix -->
            <button type="submit" name="register" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>
            <div class="row small-spacing">
                <div class="col-sm-12">
                    <div class="txt-login-with txt-center">If there</div>
                    <!-- /.txt-login-with -->
                </div>
            </div>
            <!-- /.row -->
            <a href="login.php" class="a-link btn btn-primary btn-block text-white"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
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
