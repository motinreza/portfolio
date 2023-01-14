<?php

namespace app\classes;

use app\classes\Database;

class Hero
{
    public function addHero($data){

        $owner_name = $data["owner_name"];
        $status = $data["status"];

        $file = $_FILES["shortcut"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $shortcut = uniqid().'.'.$file_end;

        $file = $_FILES["logo"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $logo = uniqid().'.'.$file_end;

        $file = $_FILES["background"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $background = uniqid().'.'.$file_end;

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `hero_sima`(`owner_name`, `shortcut`, `logo`, `background`,`status`) VALUES ('$owner_name','$shortcut','$logo','$background','$status') ");
        move_uploaded_file($_FILES["shortcut"]["tmp_name"], "../uploads/hero/".$shortcut);
        move_uploaded_file($_FILES["logo"]["tmp_name"], "../uploads/hero/".$logo);
        move_uploaded_file($_FILES["background"]["tmp_name"], "../uploads/hero/".$background);

        if($result){
            $_SESSION["hero_add"] = "<div class='alert alert-info'>Hero data add success!</div>";
        }
    }

    public function heroAll(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `hero_sima` ");
    }

    public function heroAllShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `hero_sima` WHERE `status` = 'active' ");
    }
}