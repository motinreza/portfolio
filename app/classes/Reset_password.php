<?php

namespace app\classes;

use app\classes\Database;

class Reset_password
{
    public function resetPasswordAccess($data){

        $email = $data["email"];
        $password = $data["password"];
        $c_password = $data["c_password"];

        $password_md5 = md5($data["password"]);
        $c_password_md5 = md5($data["c_password"]);

        $error = array();

        if(empty($password)){
            $error["password"] = "This password field is required!";
            $_SESSION["password_error"] = $error;
        }
        if(empty($c_password)){
            $error["c_password"] = "This confirm password field is required!";
            $_SESSION["c_password_error"] = $error;
        }

        if(count($error) == 0){

            if(strlen($password) > 7){

                if($password == $c_password){

                    $result = mysqli_query(Database::dbCon(), "UPDATE `users` SET `password`='$password_md5',`c_password`='$c_password_md5' WHERE `email` = '$email' ");

                    if($result){
                        $_SESSION["reset_password"] = "<div class='alert alert-info'>New password save success please <a href='login.php'>login!</a></div>";
                    }

                }else{
                    $_SESSION["password_notMatched"] = "Password or confirm not matched!";
                }

            }else{
                $_SESSION["password_character"] = "Password more than 8 characters!";
            }

        }

    }

    public function check_email_token(){

        $email = $_GET["email"];
        $token = $_GET["token"];

        $result = mysqli_query(Database::dbCon(), "SELECT * FROM `users` WHERE `email` = '$email' AND `token` = '$token' ");

        if(mysqli_num_rows($result) == 0){
            header("location: login.php");
        }

    }

}