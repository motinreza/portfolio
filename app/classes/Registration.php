<?php

namespace app\classes;

use app\classes\Database;

class Registration
{
    public function registrationAccess($data){
        $email = $data["email"];
        $username = $data["username"];
        $password = $data["password"];
        $c_password = $data["c_password"];

        $password_md5 = md5($data["password"]);
        $c_password_md5 = md5($data["c_password"]);

        $error = array();

        if(empty($email)){
            $error["email"] = "This email field is required!";
            $_SESSION["email_error"] = $error;
        }
        if(empty($username)){
            $error["username"] = "This username field is required!";
            $_SESSION["username_error"] = $error;
        }
        if(empty($password)){
            $error["password"] = "This password field is required!";
            $_SESSION["password_error"] = $error;
        }
        if(empty($c_password)){
            $error["c_password"] = "This confirm password field is required!";
            $_SESSION["c_password_error"] = $error;
        }

        if(count($error) == 0){

            $email_check = mysqli_query(Database::dbCon(), "SELECT * FROM `users` WHERE `email` = '$email' ");

            if(mysqli_num_rows($email_check) == 0){

                if(strlen($username) > 6){

                    if(strlen($password) > 7){

                        if($password_md5 == $c_password_md5){

                            $result = mysqli_query(Database::dbCon(), "INSERT INTO `users`(`name`, `email`, `password`, `c_password`) VALUES ('$username','$email','$password_md5','$c_password_md5') ");

                            if($result){
                                $_SESSION["registered"] = "<div class='alert alert-info'>Now your account registered! Please <a href='login.php'>login</a></div>";
                            }else{
                                $_SESSION["notRegistered"] = "<div class='alert alert-danger'>Something wrong!</div>";
                            }

                        }else{
                            $_SESSION["password_notMatched"] = "Password or confirm not matched!";
                        }

                    }else{
                        $_SESSION["password_character"] = "Password more than 8 characters!";
                    }

                }else{
                    $_SESSION["username_character"] = "Username more than 6 characters!";
                }

            }else{
                $_SESSION["email_exists"] = "This email already exists!";
            }

        }

    }
}