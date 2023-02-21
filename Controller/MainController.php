<?php

class MainController {

    public static function startSite(){
        include_once 'View/main.php';
        return;
    }

    public static function error404(){
        include_once('View/error404.php');
        return;
    }

}

?>