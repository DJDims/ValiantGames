<?php

class UserModel{
    public static function findAllUsers() {
        $query = "SELECT * FROM `users` ORDER BY `username` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findOtherUsers() {
        $query = "SELECT * FROM `users` WHERE id > 1 ORDER BY `username` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findUserById($userId) {
        $query = "SELECT * FROM `users` WHERE id = '$userId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function findUsersByRole($rolename) {
        $query = "SELECT * FROM `users` WHERE `role` = '$rolename' ORDER BY `username` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function countUsers() {
        $query = "SELECT COUNT(id) FROM users";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countBuyedGames($userId) {
        $query = "SELECT COUNT(id) FROM `game_user` WHERE `status` = 2 AND `userId` = '$userId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countWishedGames($userId) {
        $query = "SELECT COUNT(id) FROM `game_user` WHERE `status` = 1 AND `userId` = '$userId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function login(){

        if (!isset($_POST['send'])) {
            return false;
        }
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if ($username == "" || $password == "") {
            return false;
        }

        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $db = new database();
        $response = $db -> getOne($query);

        if ($response == null) {
            return false;
        }

        if ($username == $response['username'] && password_verify($password, $response['password'])) {
            $_SESSION['sessionId'] = session_id();
            $_SESSION['userId'] = $response['id'];
            $_SESSION['avatar'] = $response['avatar'];
            $_SESSION['role'] = $response['role'];
        }


        return true;
    }

    public static function logout() {
        unset($_SESSION['sessionId']);
        unset($_SESSION['userId']);
        unset($_SESSION['avatar']);
        unset($_SESSION['role']);
        session_destroy();

        return;
    }

    public static function register(){
        if (!isset($_POST['send'])) {
            return false;
        }

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirmPassword']);
        
        if($password != $confirmPassword) {
            return false;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO `users`(`username`, `password`) VALUES ('$username', '$hashedPassword')";
        $db = new database();
        $response = $db -> executeRun($query);
        
        return true;
    }

    public static function editUser($id) {
        
    }

    public static function wishGame($gameId, $userId) {
        $query = "INSERT INTO `game_user`(`gameId`, `userId`) VALUES ('$gameId','$userId')";
        $db = new database();
        $response = $db -> executeRun($query);
    }

    public static function unwishGame($gameId, $userId) {
        $query = "DELETE FROM `game_user` WHERE gameId = '$gameId' AND userId = '$userId'";
        $db = new database();
        $response = $db -> executeRun($query);
    }

    public static function buyGame($gameId, $userId) {
        $db = new database();
        $currentMoney = UserModel::findUserById($userId)['wallet'];
        $gamePrice = gameModel::findGameById($gameId)['price'];

        if ($currentMoney < $gamePrice) {
            return false;
        }

        $query = "SELECT * FROM `game_user` WHERE gameId = '$gameId' AND userId = '$userId' AND status = 2";
        $response = $db -> getOne($query);
        
        if ($response) {
            return false;
        }

        $query = "SELECT * FROM `game_user` WHERE gameId = '$gameId' AND userId = '$userId'";
        $response = $db -> getOne($query);
        
        if ($response) {
            $query = "UPDATE `game_user` SET `status`= 2,`price`='$gamePrice' WHERE gameId = '$gameId' AND userId = '$userId'";
            $db -> executeRun($query);
        } else {
            $query = "INSERT INTO `game_user`(`gameId`, `userId`, `status`, `price`) VALUES ('$gameId','$userId',2,'$gamePrice')";
            $db -> executeRun($query);
        }
        
        $currentMoney -= $gamePrice;
        $query = "UPDATE `users` SET `wallet`='$currentMoney' WHERE id = '$userId'";
        $db -> executeRun($query);
        
        return;
    }

    public static function addMoney($userId) {
        if (!isset($_POST['send'])) {
            return false;
        }

        $addedMoney = $_POST['money'];

        if($addedMoney == 0) {
            return false;
        }
        
        $currentMoney = UserModel::findUserById($userId)['wallet'];
        $currentMoney += $addedMoney;

        $query = "UPDATE `users` SET `wallet`='$currentMoney' WHERE id = '$userId'";
        $db = new database();
        $response = $db -> executeRun($query);

        return $response;
    }

    public static function changeRole() {
        if (!isset($_POST['send'])) {
            return false;
        }

        $userId = $_POST['userId'];
        $role = $_POST['role'];

        $query = "UPDATE `users` SET `role`= $role WHERE id = $userId";
        $db = new database();
        $response = $db -> executeRun($query);

        if ($response != true) {
            return false;
        }
        
        return true;
    }

}

?>