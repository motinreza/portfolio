<?php

namespace app\classes;

use app\classes\Database;

class Services
{
    public function addServices($data){

        $title = $data["title"];
        $description = $data["description"];
        $status = $data["status"];

        $file = $_FILES["image"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $file_name = uniqid().'.'.$file_end;

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `services`(`title`, `description`, `image`) VALUES ('$title','$description','$file_name') ");
        move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/services/".$file_name);

        if($result){
            $_SESSION["data_insert"] = "<div class='alert alert-info'>Services save success!</div>";
        }
    }

    public function allServices(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `services` ");
    }

    public function allServicesShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `services` WHERE `status` = 'active' ");
    }
}