<?php

namespace app\classes;

use app\classes\Database;

class Reset
{
    public function resetAccess($data){

        $email = $data["email"];

        $error = array();

        if(empty($email)){
            $error["email"] = "This email field is required!";
            $_SESSION["email_error"] = $error;
        }

        if(count($error) == 0){

            $email_check = mysqli_query(Database::dbCon(), "SELECT * FROM `users` WHERE `email` = '$email' ");

            if(mysqli_num_rows($email_check) == 1){

                $token = uniqid();
                $token_create = mysqli_query(Database::dbCon(), "UPDATE `users` SET `token`='$token' WHERE `email` = '$email' ");

                if($token_create){

                    $row = mysqli_fetch_assoc($email_check);
                    $name = $row["name"];

                    sendmail($email, $name, $token);

                }else{
                    $_SESSION["forgot_error"] = "<div class='alert alert-danger'>Token not saved!</div>";
                }

            }else{
                $_SESSION["email_check"] = "This credentials do not match our records!";
            }

        }

    }
}