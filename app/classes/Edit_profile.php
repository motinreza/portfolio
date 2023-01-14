<?php

namespace app\classes;

use app\classes\Database;

class Edit_profile
{
    public function editProfileAccess($data){

        $name = $data["name"];
        $title = $data["title"];
        $address = $data["address"];
        $phone = $data["phone"];
        $birthday = $data["birthday"];
        $interest = $data["interest"];
        $email = $data["email"];
        $website = $data["website"];

        $facebook = $data["facebook"];
        $twitter = $data["twitter"];
        $instagram = $data["instagram"];
        $linkedin = $data["linkedin"];
        $behance = $data["behance"];
        $skype = $data["skype"];
        $fiverr = $data["fiverr"];
        $youtube = $data["youtube"];
        $old_file = $data["old_file"];


        if(empty($_FILES["image"]["name"])){
            $result = mysqli_query(Database::dbCon(), "UPDATE `profile` SET `name`='$name',`title`='$title',`address`='$address',`phone`='$phone',`birthday`='$birthday',`interest`='$interest',`email`='$email',`website`='$website',`facebook`='$facebook',`twitter`='$twitter',`instagram`='$instagram',`linkedin`='$linkedin',`behance`='$behance',`skype`='$skype',`fiverr`='$fiverr',`youtube`='$youtube' ");
        }else{
            $old_file = 'images/profile/'.$data["old_file"];

            $file = $_FILES["image"]["name"];
            $file_exp = explode('.', $file);
            $file_end = end($file_exp);
            $file_name = uniqid().'.'.$file_end;

            unlink($old_file);

            $result = mysqli_query(Database::dbCon(), "UPDATE `profile` SET `name`='$name',`title`='$title',`address`='$address',`phone`='$phone',`birthday`='$birthday',`interest`='$interest',`email`='$email',`website`='$website',`facebook`='$facebook',`twitter`='$twitter',`instagram`='$instagram',`linkedin`='$linkedin',`behance`='$behance',`skype`='$skype',`fiverr`='$fiverr',`youtube`='$youtube',`image`='$file_name' ");
        }

        if($result){
            move_uploaded_file($_FILES["image"]["tmp_name"], "../uploads/profile/".$file_name);
            header("location: profile.php");
        }

    }
}