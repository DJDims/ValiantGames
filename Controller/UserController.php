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

    public static function showProfile($userId) {
        $userData = UserModel::findUserById($userId);
        $gamesBuyed = GameModel::findLibrary($userId);
        $gamesWished = GameModel::findWhisList($userId);
        $countGamesBuyed = UserModel::countBuyedGames($userId);
        $countGamesWished = UserModel::countWishedGames($userId);
        include_once('View/myaccount.php');
    }

    public static function showTableUsers() {
        $users = UserModel::findOtherUsers();
        include_once('View/userTable.php');
    }

    public static function addMoney() {
        $result = UserModel::addMoney();

        if (isset($result) && $result == true) {
            header('Location: /');
        } else {
            include_once('View/registerForm.php');
        }
        return;
    }

    public static function showBuyGame($gameId){

    }
}

?>