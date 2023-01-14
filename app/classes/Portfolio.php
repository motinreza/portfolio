<?php

namespace app\classes;

use app\classes\Database;

class Portfolio
{
    public function portfolioAdd($data){

        $title = $data["title"];
        $description = $data["description"];
        $portfolio_link = $data["portfolio_link"];
        $status = $data["status"];

        $file = $_FILES["image"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $file_name = uniqid().'.'.$file_end;

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `portfolio`(`title`, `description`, `portfolio_link`, `image`, `status`) VALUES ('$title','$description', '$portfolio_link', '$file_name','$status') ");
        move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/portfolio/".$file_name);

        if($result){
            $_SESSION["data_insert"] = "<div class='alert alert-info'>Data save success!</div>";
        }
    }

    public function allPortfolio(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `portfolio` ");
    }

    public function portfolioEditid($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `portfolio` WHERE `id` = '$id' ");
    }

    public function portfolioEdit($data){

        $id = $data["id"];
        $title = $data["title"];
        $portfolio_link = $data["portfolio_link"];
        $description = $data["description"];
        $status = $data["status"];
        $old_file = $data["image"];

        if(empty($_FILES["image"]["name"])){
            $result = mysqli_query(Database::dbCon(), "UPDATE `portfolio` SET `title`='$title',`description`='$description', `portfolio_link`='$portfolio_link', `status`='$status' WHERE `id` = '$id' ");
        }else{

            $old_file = '../uploads/portfolio/'.$data["image"];

            $file = $_FILES["image"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $file_name = uniqid().'.'.$file_end;

            unlink($old_file);

            $result = mysqli_query(Database::dbCon(), "UPDATE `portfolio` SET `title`='$title',`description`='$description',`image`='$file_name',`status`='$status' WHERE `id` = '$id' ");
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/portfolio/".$file_name);

        }
    }

    public function allPortfolioShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `portfolio` WHERE `status` = 'active' ");
    }
}