<?php

class UserController{
    public static function showLoginForm() {
        include_once('View/loginForm.php');
        return;
    }

    public static function login() {
        if (isset($_SESSION['userId'])) {
            header('Location: profile');
            return;
        }

        $result = UserModel::login();

        if (isset($result) && $result == true) {
            MainController::showMain();
        } else {
            $_SESSION['alert']['message'] = 'Неверный логин или пароль';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
            include_once('View/loginForm.php');
        }

        return;
    }

    public static function logout() {
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
        }

        UserModel::logout();

        include_once('View/loginForm.php');
        return;
    }

    public static function showRegisterForm() {
        if (isset($_SESSION['userId'])) {
            header('Location: profile');
            return;
        }

        include_once('View/registerForm.php');
        return;
    }

    public static function register() {
        if (isset($_SESSION['userId'])) {
            header('Location: profile');
            return;
        }

        $result = UserModel::register();

        if (isset($result) && $result == true) {
            UserController::login();
        } else {
            $_SESSION['alert']['message'] = 'Ошибка регистрации';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
            include_once('View/registerForm.php');
        }

        return;
    }

    public static function showProfile() {
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
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
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
        }

        $userId = $_SESSION['userId'];

        $games = GameModel::findWhisList($userId);

        include_once('View/myWishlist.php');
        return;
    }

    public static function showLibrary() {
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
        }

        $userId = $_SESSION['userId'];

        $games = GameModel::findLibrary($userId);

        include_once('View/myLibrary.php');
        return;
    }

    public static function showTableUsers() {
        if (!isset($_SESSION['role']) && $_SESSION['role'] != 'ADMIN') {
            header('Location: error403');
            return;
        }
        
        $users = UserModel::findOtherUsers();
        $roles = array('USER', 'MODERATOR', 'ADMIN');

        include_once('View/userTable.php');
        return;
    }

    public static function addMoney() {
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
        }

        $result = UserModel::addMoney($_SESSION['userId']);
        UserController::showProfile();
        return;
    }

    public static function buyGame($gameId){
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
        }

        UserModel::buyGame($gameId, $_SESSION['userId']);

        $_SESSION['alert']['message'] = 'Игра куплена';
        $_SESSION['alert']['type'] = 'alert-success';
        $_SESSION['alert']['icon'] = '#check-circle-fill';
        
        UserController::showProfile();
        return;
    }
    
    public static function wishGame($gameId){
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
        }

        UserModel::wishGame($gameId, $_SESSION['userId']);

        $_SESSION['alert']['message'] = 'Игра добавлена в желаемое';
        $_SESSION['alert']['type'] = 'alert-success';
        $_SESSION['alert']['icon'] = '#check-circle-fill';

        UserController::showProfile();
        return;
    }
    
    public static function unwishGame($gameId){
        if (!isset($_SESSION['userId'])) {
            header('Location: showLogin');
            return;
        }

        UserModel::unwishGame($gameId, $_SESSION['userId']);

        $_SESSION['alert']['message'] = 'Игра удалена из желаемого';
        $_SESSION['alert']['type'] = 'alert-success';
        $_SESSION['alert']['icon'] = '#check-circle-fill';

        UserController::showProfile();
        return;
    }

    public static function changeRole() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] != 'ADMIN') {
            header('Location: error403');
            return;
        }

        $result = UserModel::changeRole();

        if ($result == true) {
            $_SESSION['alert']['message'] = 'Роль успешно обновлена';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось обновить роль';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableUsers');
        return;
    }

    public static function changeAvatar() {
        if (!isset($_SESSION['role'])) {
            header('Location: showLoginForm');
            return;
        }

        $result = UserModel::changeAvatar($_SESSION['userId']);

        if ($result == true) {
            $_SESSION['avatar'] = trim($_POST['avatar']);
            $_SESSION['alert']['message'] = 'Аватар успешно обновлен';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось обновить аватар';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }

        UserController::showProfile();
        return;
    }
}

?>