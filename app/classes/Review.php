<?php

namespace app\classes;

use app\classes\Database;

class Review
{
    public function reviewAdd($data){

        $customer = $data["customer"];
        $project = $data["project"];
        $review = $data["review"];
        $running = $data["running"];
        $status = $data["status"];

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `short_review`(`customer`, `project`, `review`, `running`,`status`) VALUES ('$customer','$project','$review','$running','$status') ");

        if($result){
            $_SESSION["alert"] = "<div class='alert alert-info'>Review save success!</div>";
        }
    }

    public function reviewAll(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `short_review` ");
    }

    public function reviewEditid($id){
        return $review = mysqli_query(Database::dbCon(), "SELECT * FROM `short_review` WHERE `id` = '$id' ");
    }

    public function reviewEdit($data){

        $id = $data["id"];
        $customer = $data["customer"];
        $project = $data["project"];
        $review = $data["review"];
        $running = $data["running"];
        $status = $data["status"];

        $result = mysqli_query(Database::dbCon(), "UPDATE `short_review` SET `customer`='$customer',`project`='$project',`review`='$review',`running`='$running',`status`='$status' WHERE `id` = '$id' ");

    }

    public function shortReviewShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `short_review` WHERE `status` = 'active' ");
    }
}