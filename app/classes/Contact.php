<?php

namespace app\classes;

use app\classes\Database;

class Contact
{
    public function contactInfo($data){

        $name = $data["name"];
        $email = $data["email"];
        $subject = $data["subject"];
        $message = $data["message"];

        sendmail2($email, $name, $subject, $message);

    }
}