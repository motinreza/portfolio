<?php

namespace app\classes;

use app\classes\Database;

class Edit_hero
{
    public function editHero($data){

        $id = $data["id"];
        $owner_name = $data["owner_name"];
        $status = $data["status"];
        $old_logo = $data["old_logo"];
        $old_background = $data["old_background"];

        if(empty($_FILES["logo"]["name"])){
            $result = mysqli_query(Database::dbCon(), "UPDATE `hero_sima` SET `owner_name`='$owner_name' WHERE `id` = '$id' ");
        }else{

            $old_logo = '../uploads/hero/'.$data["old_logo"];
            $old_background = '../uploads/hero/'.$data["old_background"];

            $file = $_FILES["logo"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $logo = uniqid().'.'.$file_end;

            $file = $_FILES["background"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $background = uniqid().'.'.$file_end;

            //unlink($old_logo);
            unlink($old_background);

            $result = mysqli_query(Database::dbCon(), "UPDATE `hero_sima` SET `owner_name`='$owner_name',`background`='$background' WHERE `id` = '$id' ");
            move_uploaded_file($_FILES["logo"]["tmp_name"], "../uploads/hero/".$logo);
            move_uploaded_file($_FILES["background"]["tmp_name"], "../uploads/hero/".$background);


        }
    }

    public function heroAll($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `hero_sima` WHERE `id` = '$id' ");
    }

    public function categoryAll($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `hero_category` WHERE `id` = '$id' ");
    }

    public function categoryEdit($data){

        $id = $data["id"];
        $category_name = $data["category_name"];
        $status = $data["status"];

        $result = mysqli_query(Database::dbCon(), "UPDATE `hero_category` SET `category_name`='$category_name',`status`='$status' WHERE `id` = '$id' ");

        if($result){
            header("location: hero-category.php");
        }

    }
}