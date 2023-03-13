<?php

class UserController{
    public static function showLoginForm() {
        include_once('View/loginForm.php');
        return;
    }

    public static function login() {
        $result = UserModel::login();

        if (isset($result) && $result == true) {
            MainController::showMain();
        } else {
            include_once('View/loginForm.php');
        }

        return;
    }

    public static function logout() {
        UserModel::logout();

        include_once('View/loginForm.php');
        return;
    }

    public static function showRegisterForm() {
        include_once('View/registerForm.php');
        return;
    }

    public static function register() {
        $result = UserModel::register();

        if (isset($result) && $result == true) {
            UserController::login();
        } else {
            include_once('View/registerForm.php');
        }

        return;
    }

    public static function showProfile() {
        if (!isset($_SESSION['role']) && $_SESSION['role'] != 'ADMIN') {
            
        }
        $userId = $_SESSION['userId'];

        $userData = UserModel::findUserById($userId);
        $gamesBuyed = GameModel::findLibrary($userId, 4);
        $gamesWished = GameModel::findWhisList($userId, 4);
        $countGamesBuyed = UserModel::countBuyedGames($userId);
        $countGamesWished = UserModel::countWishedGames($userId);

        include_once('View/myaccount.php');
        return;
    }

    public static function showWishlist() {
        $userId = $_SESSION['userId'];

        $games = GameModel::findWhisList($userId);

        include_once('View/myWishlist.php');
        return;
    }

    public static function showLibrary() {
        $userId = $_SESSION['userId'];

        $games = GameModel::findLibrary($userId);

        include_once('View/myLibrary.php');
        return;
    }

    public static function showTableUsers() {
        $users = UserModel::findOtherUsers();

        include_once('View/userTable.php');
        return;
    }

    public static function addMoney() {
        $result = UserModel::addMoney($_SESSION['userId']);
        UserController::showProfile();
        return;
    }

    public static function buyGame($gameId){
        UserModel::buyGame($gameId, $_SESSION['userId']);

        $_SESSION['alert']['message'] = 'Игра куплена';
        $_SESSION['alert']['type'] = 'alert-success';
        $_SESSION['alert']['icon'] = '#check-circle-fill';
        
        UserController::showProfile();
        return;
    }
    
    public static function wishGame($gameId){
        UserModel::wishGame($gameId, $_SESSION['userId']);

        $_SESSION['alert']['message'] = 'Игра добавлена в желаемое';
        $_SESSION['alert']['type'] = 'alert-success';
        $_SESSION['alert']['icon'] = '#check-circle-fill';

        UserController::showProfile();
        return;
    }
    
    public static function unwishGame($gameId){
        UserModel::unwishGame($gameId, $_SESSION['userId']);

        $_SESSION['alert']['message'] = 'Игра удалена из желаемого';
        $_SESSION['alert']['type'] = 'alert-success';
        $_SESSION['alert']['icon'] = '#check-circle-fill';

        UserController::showProfile();
        return;
    }
}

?>