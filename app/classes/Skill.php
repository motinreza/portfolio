<?php

namespace app\classes;

use app\classes\Database;

class Skill
{
    public function addSkill($data){

        $skill_name = $data["skill_name"];
        $percent = $data["percent"];
        $status = $data["status"];

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `skill`(`skill_name`, `percent`,`status`) VALUES ('$skill_name','$percent','$status') ");

        if($result){
            $_SESSION["skill_add"] = "<div class='alert alert-info'>Skill add save success!</div>";
        }
    }

    public function allSkill(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `skill` ");
    }

    public function editAllskill($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `skill` WHERE `id` = '$id' ");
    }

    public function editSkill($data){

        $id = $data["id"];
        $skill_name = $data["skill_name"];
        $percent = $data["percent"];
        $status = $data["status"];

        $result = mysqli_query(Database::dbCon(), "UPDATE `skill` SET `skill_name`='$skill_name',`percent`='$percent',`status`='$status' WHERE `id` = '$id' ");
    }

    public function allSkillShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `skill` WHERE `status` = 'active' ");
    }
}