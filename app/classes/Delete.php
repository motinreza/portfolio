<?php

namespace app\classes;

use app\classes\Delete;

class DeleteClass
{
    public function aboutDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `about` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function heroDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `hero_sima` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function categoryDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `hero_category` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function skillDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `skill` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function servicesDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `services` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function reviewDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `short_review` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function portfolioDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `portfolio` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function creviewDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `customer_review` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function blogCategoryDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `blog_category` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }

    public function blogDelete($id){
        $result = mysqli_query(Database::dbCon(), "DELETE FROM `blog` WHERE `id` = '$id' ");
        if($result){
            $_SESSION["delete"] = "<div class='alert alert-info'>Data delete success!</div>";
        }
    }
}
