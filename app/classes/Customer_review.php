<?php

namespace app\classes;

use app\classes\Database;

class Customer_review
{
    public function cReviewAdd($data){

        $name = $data["name"];
        $comment = $data["comment"];
        $country = $data["country"];
        $review = $data["review"];
        $status = $data["status"];

        $file = $_FILES["image"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $file_name = uniqid().'.'.$file_end;

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `customer_review`(`name`, `comment`, `country`, `review`, `status`, `image`) VALUES ('$name','$comment','$country','$review','$status','$file_name') ");
        move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/customer/".$file_name);

        if($result){
            $_SESSION["alert"] = "<div class='alert alert-info'>Data save success!</div>";
        }
    }

    public function cReviewAll(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `customer_review` ");
    }

    public function cReviewId($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `customer_review` WHERE `id` = '$id' ");
    }

    public function cReviewEdit($data){

        $id = $data["id"];
        $name = $data["name"];
        $comment = $data["comment"];
        $country = $data["country"];
        $review = $data["review"];
        $status = $data["status"];
        $old_file = $data["image"];

        if(empty($_FILES["image"]["name"])){
            $result = mysqli_query(Database::dbCon(), "UPDATE `customer_review` SET `name`='$name',`comment`='$comment',`country`='$country',`review`='$review',`status`='$status' WHERE `id` = '$id' ");
        }else{

            $old_file = '../uploads/customer/'.$data["image"];

            $file = $_FILES["image"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $file_name = uniqid().'.'.$file_end;

            unlink($old_file);

            $result = mysqli_query(Database::dbCon(), "UPDATE `customer_review` SET `name`='$name',`comment`='$comment',`country`='$country',`review`='$review',`status`='$status',`image`='$file_name' WHERE `id` = '$id' ");
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/customer/".$file_name);

        }
    }

    public function customerReviewShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `customer_review` WHERE `status` = 'active' ");
    }
}