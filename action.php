<?php

require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\StudentInfo;



if (isset($_GET['pages'])) {
    if ($_GET['pages'] == 'home') {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'file') {
        include 'pages/home.php';
    }
}elseif (isset($_POST['btn'])){
    $sInfo = new StudentInfo($_POST, $_FILES);
    $sInfo->info();
}



