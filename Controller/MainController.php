<?php

class MainController {

    public static function startSite(){
        $_SESSION['orderBy'] = 'TITLE';
        $_SESSION['orderType'] = 'ASC';
        $_SESSION['currentPage'] = 'home';
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

        $_SESSION['currentPage'] = '';

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
    
    public static function browse($orderBy, $orderType) {
        $games = GameModel::findGamesOrderBy($orderBy, $orderType);

        include_once('View/browse.php');
        return;
    }

    public static function browsePopular() {
        $games = GameModel::findGamesOrderByPurchases();

        include_once('View/browse.php');
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