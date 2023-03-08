<?php

class MainController {

    public static function startSite(){
        MainModel::createAdmin();
        MainController::showMain();
        return;
    }

    public static function showMain() {
        $popGames = GameModel::findGamesOrderByPurchases();
        $newGames = GameModel::findGamesOrderByDateAdd();

        if (isset($_SESSION['userId'])) {
            $wishList = GameModel::findWhisList($_SESSION['userId']);
        }
        
        include_once 'View/main.php';
        return;
    }

    public static function search() {
        $games = GameModel::findByKeyword($_POST['searchKeyword']);

        include_once('View/search.php');
        return;
    }

    public static function error404(){
        include_once('View/error404.php');
        return;
    }

}

?>