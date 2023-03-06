<?php

class GameController{
    public static function showTableGames() {
        $games = GameModel::findAllGames();
        
        include_once('View/gameTable.php');
        return;
    }

    public static function showAddGame() {
        $companies = CompanyModel::findAllCompanies();
        $categories = CategoryModel::findAllCategories();

        include_once('View/GameAdd.php');
        return;
    }

    public static function addGame() {
        $result = GameModel::addGame();

        if ($result == true) {
            $_SESSION['message'] = 'Данные добавлены';
            header('Location: showTableGames');
        } else {
            $error = 'Не удалось добавить данные';
            include_once('View/gameAdd.php');
        }

        return;
    }

    public static function showEditGame($gameId) {
        $game = GameModel::findGameById($gameId);
        $companies = CompanyModel::findAllCompanies();
        $categories = CategoryModel::findAllCategories();

        include_once('View/GameEdit.php');
        return;
    }

    public static function editGame($gameId) {
        $result = GameModel::editGame($gameId);

        if ($result == true) {
            $_SESSION['message'] = 'Данные обновлены';
            header('Location: showTableGames');
        } else {
            $error = 'Не удалось обновить данные';
            include_once('View/gameEdit.php');
        }

        return;
    }

    public static function showDeleteGame($gameId) {
        $game = GameModel::findGameById($gameId);
        $company = CompanyModel::findCompanyById($game['companyId']);
        $category = CategoryModel::findCategoryById($game['categoryId']);
        $countBundles = BundleModel::countBundlesByGame($gameId);
        
        include_once('View/gameDelete.php');
        return;
    }

    public static function deleteGame($gameId) {
        $result = GameModel::deleteGame($gameId);

        if ($result == true) {
            $_SESSION['message'] = 'Данные удалены';
            header('Location: showTableGames');
        } else {
            $error = 'Не удалось удалить данные';
            include_once('View/gameDelete.php');
        }
        
        return;
    }

    public static function showDetails($gameId) {
        $game = GameModel::findGameById($gameId);
        $userStatus = GameModel::findUserStatus($gameId, $_SESSION['userId']);

        include_once('View/gameDetails.php');
        return;
    }
}

?>