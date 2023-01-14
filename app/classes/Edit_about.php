<?php


namespace app\classes;

use app\classes\Database;

class Edit_about
{
    public function aboutAll($id){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `about` WHERE `id` = '$id' ");
    }

    public function editAboutaccess($data){

        $id = $data["id"];
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
        $old_file = $data["old_file"];

        if(empty($_FILES["image"]["name"])){
            $result = mysqli_query(Database::dbCon(), "UPDATE `about` SET `title`='$title',`description_one`='$description_one',`description_two`='$description_two',`facebook`='$facebook',`twitter`='$twitter',`instagram`='$instagram',`behance`='$behance',`linkedin`='$linkedin',`fiverr`='$fiverr',`resume`='$resume',`status`='$status' WHERE `id` = '$id' ");
        }else{

            $old_file = '../uploads/about/'.$data["old_file"];

            $file = $_FILES["image"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $file_name = uniqid().'.'.$file_end;

            unlink($old_file);

            $result = mysqli_query(Database::dbCon(), "UPDATE `about` SET `title`='$title',`description_one`='$description_one',`description_two`='$description_two',`facebook`='$facebook',`twitter`='$twitter',`instagram`='$instagram',`behance`='$behance',`linkedin`='$linkedin',`fiverr`='$fiverr',`resume`='$resume',`status`='$status',`image`='$file_name' WHERE `id` = '$id' ");
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/about/".$file_name);

        }
    }
}