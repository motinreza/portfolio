<?php

namespace app\classes;

class Database
{
    public static function dbCon(){
        $localhost = "localhost";
        $username = "root";
        $password = "";
        $database = "motinreza";

        return $link = mysqli_connect($localhost, $username, $password, $database);

    }
}
