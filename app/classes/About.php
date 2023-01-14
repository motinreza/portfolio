<?php

namespace app\classes;

use app\classes\Database;

class About
{
    public function aboutaddAccess($data){

        $title = $data["title"];
        $description_one = $data["description_one"];
        $description_two = $data["description_two"];
        $facebook = $data["facebook"];
        $twitter = $data["twitter"];
        $instagram = $data["instagram"];
        $behance = $data["behance"];
        $linkedin = $data["linkedin"];
        $fiverr = $data["fiverr"];
        $resume = $data["resume"];
        $status = $data["status"];

        $file = $_FILES["image"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $file_name = uniqid().'.'.$file_end;

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `about`(`title`, `description_one`, `description_two`, `facebook`, `twitter`, `instagram`, `behance`, `linkedin`, `fiverr`, `resume`, `image`,`status`) VALUES ('$title','$description_one','$description_two','$facebook','$twitter','$instagram','$behance','$linkedin','$fiverr','$resume','$file_name','$status') ");
        move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/about/".$file_name);

        if($result){
            $_SESSION["data_insert"] = "<div class='alert alert-info'>Data save success!</div>";
        }

    }

    public function allAbout(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `about` ");
    }

    public function allAboutShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `about` WHERE `status` = 'active' ");
    }

}