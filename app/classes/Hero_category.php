<?php

namespace app\classes;

use app\classes\Database;

class Hero_category
{
    public function addCategory($data){
        $category_name = $data["category_name"];
        $status = $data["status"];

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `hero_category`(`category_name`, `status`) VALUES ('$category_name','$status') ");
        if($result){
            $_SESSION["category_add"] = "<div class='alert alert-info'>Category add save success!</div>";
        }
    }

    public function allCategory(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `hero_category` ");
    }

    public function allCategoryShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `hero_category` WHERE `status` = 'active' ORDER BY `id` ASC ");
    }
}