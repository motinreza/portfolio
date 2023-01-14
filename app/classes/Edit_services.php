<?php

namespace app\classes;

use app\classes\Database;

class Edit_services
{
    public function editServicesAll($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `services` WHERE `id` = '$id' ");
    }

    public function editServicesId($data){

        $id = $data["id"];
        $title = $data["title"];
        $description = $data["description"];
        $status = $data["status"];
        $old_file = $data["old_file"];

        if(empty($_FILES["image"]["name"])){
            $result = mysqli_query(Database::dbCon(), "UPDATE `services` SET `title`='$title',`description`='$description',`status`='$status' WHERE `id` = '$id' ");
        }else{

            $old_file = '../uploads/services/'.$data["old_file"];

            $file = $_FILES["image"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $file_name = uniqid().'.'.$file_end;

            unlink($old_file);

            $result = mysqli_query(Database::dbCon(), "UPDATE `services` SET `title`='$title',`description`='$description',`image`='$file_name',`status`='$status' WHERE `id` = '$id' ");
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/services/".$file_name);

        }
    }
}