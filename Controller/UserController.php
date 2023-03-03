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
            MainController::showMain();
        } else {
            include_once('View/registerForm.php');
        }

        return;
    }

    public static function showProfile() {
        $userId = $_SESSION['userId'];

        $userData = UserModel::findUserById($userId);
        $gamesBuyed = GameModel::findLibrary($userId);
        $gamesWished = GameModel::findWhisList($userId);
        $countGamesBuyed = UserModel::countBuyedGames($userId);
        $countGamesWished = UserModel::countWishedGames($userId);

        include_once('View/myaccount.php');
        return;
    }

    public static function showTableUsers() {
        $users = UserModel::findOtherUsers();

        include_once('View/userTable.php');
        return;
    }

    public static function addMoney() {
        $userId = $_SESSION['userId'];
        $result = UserModel::addMoney($userId);

        UserController::showProfile();
        return;
    }

    public static function showBuyGame($gameId){
        return;
    }
    
    public static function buyGame($gameId){
        return;
    }
    
    public static function wishGame($gameId){
        UserModel::wishGame($gameId);
        
        return;
    }
    
    public static function unwishGame($gameId){
        UserModel::unwishGame();

        return;
    }
}

?>