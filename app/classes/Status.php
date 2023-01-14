<?php


namespace app\classes;

use app\classes\Database;

class Status
{
    public function heroInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `hero_sima` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function heroActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `hero_sima` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function aboutInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `about` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function aboutActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `about` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function categoryInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `hero_category` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function categoryActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `hero_category` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function skillInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `skill` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function skillActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `skill` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function reviewInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `short_review` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function reviewActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `short_review` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function portfolioInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `portfolio` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function portfolioActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `portfolio` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function creviewInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `customer_review` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function creviewActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `customer_review` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function categoryBlogInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `blog_category` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function categoryBlogActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `blog_category` SET `status`='active' WHERE `id` = '$id' ");
    }

    public function BlogInactive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `blog` SET `status`='inactive' WHERE `id` = '$id' ");
    }

    public function BlogActive($id){
        $result = mysqli_query(Database::dbCon(), "UPDATE `blog` SET `status`='active' WHERE `id` = '$id' ");
    }
}