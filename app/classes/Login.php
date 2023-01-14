<?php

namespace app\classes;

class Login
{
    public function loginAccess($data){

        $username = $data["username"];
        $password = $data["password"];
        $rememberMe = isset($data["rememberMe"]) ? $data["rememberMe"]:'';

        $error = array();

        if(empty($username)){
            $error["username"] = "This username field is required!";
            $_SESSION["username_error"] = $error;
        }
        if(empty($password)){
            $error["password"] = "This password field is required!";
            $_SESSION["password_error"] = $error;
        }

        if(count($error) == 0){

            $username_check = mysqli_query(Database::dbCon(), "SELECT * FROM `users` WHERE `name` = '$username' ");

            if(mysqli_num_rows($username_check) == 1){

                $row = mysqli_fetch_assoc($username_check);

                if(md5($password) == $row["password"]){

                    if($row["status"] == 'active'){

                        if($rememberMe){
                            setcookie('username', $username, time() + (7 * 24 * 60 * 60 ));
                            setcookie('password', $password, time() + (7 * 24 * 60 * 60 ));
                        }else{
                            setcookie('username', '', -time() + (7 * 24 * 60 * 60 ));
                            setcookie('password', '', -time() + (7 * 24 * 60 * 60 ));
                        }

                        header("location: index.php");
                        $_SESSION["username"] = $username;
                        $_SESSION["email"]  = $row["email"];

                    }else{
                        $_SESSION["login_error"] = "<div class='alert alert-danger'>Your account has been banned by an admin. Please contact us if you think this is an error!</div>";
                    }

                }else{
                    $_SESSION["login_error"] = "<div class='alert alert-danger'>This credentials do not match our records!</div>";
                }

            }else{
                $_SESSION["login_error"] = "<div class='alert alert-danger'>This credentials do not match our records!</div>";
            }

        }
    }
}