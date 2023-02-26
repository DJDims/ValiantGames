<?php

class UserModel{
    public static function findAllUsers() {
        $query = "SELECT * FROM `users` ORDER BY `username` ASC";
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
        switch($rolename) {
            case 'USER':
                $query = 'SELECT * FROM `users` WHERE `role` = 1 ORDER BY `username` ASC';
                break;
                
            case 'MODERATOR':
                $query = 'SELECT * FROM `users` WHERE `role` = 2 ORDER BY `username` ASC';
                break;
                
            case 'ADMIN':
                $query = 'SELECT * FROM `users` WHERE `role` = 3 ORDER BY `username` ASC';
                break;
        }

        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function countUsers() {
        $query = "SELECT COUNT(username) FROM users";
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

    public static function addUser() {
        
    }

    public static function editUser($id) {
        
    }

    public static function wishGame($gameId) {
        
    }

    public static function buyGame($gameId) {
        
    }

    public static function login(){
        if (!isset($_POST['username']) || !isset($_POST['password']) || trim($_POST['username']) == "" || trim($_POST['password']) == "") {
            return false;
        }
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

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

    public static function register(){
        
    }

}

?>