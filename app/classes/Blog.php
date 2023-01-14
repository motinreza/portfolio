<?php

namespace app\classes;

use app\classes\Database;

class Blog
{
    public function addBlogCategory($data){

        $category_name = $data["category_name"];
        $slug = $data["slug"];
        $status = $data["status"];
        $user_name = $_SESSION["username"];

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `blog_category`(`category_name`, `slug`, `status`, `username`) VALUES ('$category_name','$slug','$status','$user_name') ");

        if($result){
            $_SESSION["data_insert"] = "<div class='alert alert-info'>Data save success!</div>";
        }

    }

    public function allBlogCateogry(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog_category` ");
    }

    public function blogCategoryId($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog_category` WHERE `id` = '$id' ");
    }

    public function blogCategoryEdit($data){

        $id = $data['id'];
        $category_name = $data["category_name"];
        $slug = $data["slug"];
        $status = $data["status"];
        $user_name = $_SESSION["username"];

        $result = mysqli_query(Database::dbCon(), "UPDATE `blog_category` SET `category_name`='$category_name',`slug`='$slug',`status`='$status',`username`='$user_name' WHERE `id` = '$id' ");

    }

    public function blogCategoryName(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog_category` ");
    }

    public function blogAdd($data){

        $cat_id = $data["cat_id"];
        $title = $data["title"];
        $slug = $data["slug"];
        $content = $data["content"];
        $status = $data["status"];
        $user_name = $_SESSION["username"];

        $file = $_FILES["image"]["name"];
        $file_exp = explode('.', $file);
        $file_end = end($file_exp);
        $file_name = uniqid().'.'.$file_end;

        $result = mysqli_query(Database::dbCon(), "INSERT INTO `blog`(`cat_id`, `title`, `slug`, `content`, `status`, `image`,`username`) VALUES ('$cat_id','$title','$slug','$content','$status','$file_name','$user_name') ");
        move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/blog/".$file_name);

        if($result){
            $_SESSION["data_insert"] = "<div class='alert alert-info'>Data save success!</div>";
        }
    }

    public function blogAll(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog` ");
    }

    public function blogId($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog` WHERE `id` = '$id' ");
    }

    public function blogEdit($data){

        $id = $data["id"];
        $cat_id = $data["cat_id"];
        $title = $data["title"];
        $slug = $data["slug"];
        $content = $data["content"];
        $status = $data["status"];
        $user_name = $_SESSION["username"];
        $old_file = $data["old_file"];

        if(empty($_FILES["image"]["name"])){
            $result = mysqli_query(Database::dbCon(), "UPDATE `blog` SET `cat_id`='$cat_id',`title`='$title',`slug`='$slug',`content`='$content',`status`='$status',`username`='$user_name' WHERE `id` = '$id' ");
        }else{

            $old_file = "../uploads/blog/".$data["old_file"];

            $file = $_FILES["image"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $file_name = uniqid().'.'.$file_end;

            unlink($old_file);

            $result = mysqli_query(Database::dbCon(), "UPDATE `blog` SET `cat_id`='$cat_id',`title`='$title',`slug`='$slug',`content`='$content',`status`='$status',`image`='$file_name',`username`='$user_name' WHERE `id` = '$id' ");
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/blog/".$file_name);
        }
    }

    public function allBlogShow(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `blog` WHERE `status` = 'active' ");
    }
}