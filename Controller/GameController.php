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
            $_SESSION['alert']['message'] = 'Данные добавлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось добавить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableGames');
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
            $_SESSION['alert']['message'] = 'Данные обновлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось обновить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableGames');
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
            $_SESSION['alert']['message'] = 'Данные удалены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось удалить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableGames');
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