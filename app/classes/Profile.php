<?php

namespace app\classes;

use app\classes\Database;

class Profile
{
    public function profileAccess(){
        return $result = mysqli_query(Database::dbCon(), "SELECT * FROM `profile` ");
    }
}