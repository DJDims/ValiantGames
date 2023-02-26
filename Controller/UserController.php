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
        $gamesBuyed = UserModel::countBuyedGames($userId);
        $gamesWished = UserModel::countWishedGames($userId);
        include_once('View/myaccount.php');
    }
}

?>