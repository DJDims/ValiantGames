<?php

class MainController {

    public static function startSite(){
        MainModel::createAdmin();
        MainController::showMain();
        return;
    }

    public static function showMain() {
        $popGames = GameModel::findGamesOrderByPurchases(4);
        $newGames = GameModel::findGamesOrderByDateAdd(4);

        if (isset($_SESSION['userId'])) {
            $wishList = GameModel::findWhisList($_SESSION['userId'], 4);
        }
        
        include_once 'View/main.php';
        return;
    }

    public static function search() {
        $games = GameModel::findByKeyword(trim($_POST['searchKeyword']));

        include_once('View/search.php');
        return;
    }

    public static function showAdvancedSearch() {
        $companies = CompanyModel::findDistinctCompanies();
        $categories = CategoryModel::findDistinctCategories();
        $years = GameModel::findDistinctYears();
        
        include_once('View/advancedSearch.php');
        return;
    }
    
    public static function advancedSearch() {
        $companies = CompanyModel::findDistinctCompanies();
        $categories = CategoryModel::findDistinctCategories();
        $years = GameModel::findDistinctYears();
        $games = GameModel::findByOptions();
        
        include_once('View/advancedSearch.php');
        return;
    }

    public static function error404(){
        include_once('View/error404.php');
        return;
    }

    public static function error403(){
        include_once('View/error403.php');
        return;
    }

}

?>