<?php

require_once "../app/classes/Autoload.php";

session_destroy();

header("location: login.php");