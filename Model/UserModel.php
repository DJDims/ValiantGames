<?php

class UserModel{
    public static function findAllUsers() {
        $query = 'SELECT * FROM `user` ORDER BY `username` ASC';
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findUsersByRole($rolename) {
        switch($rolename) {
            case 'USER':
                $query = 'SELECT * FROM `user` WHERE `role` = 1 ORDER BY `username` ASC';
                break;
                
            case 'MODERATOR':
                $query = 'SELECT * FROM `user` WHERE `role` = 2 ORDER BY `username` ASC';
                break;
                
            case 'ADMIN':
                $query = 'SELECT * FROM `user` WHERE `role` = 3 ORDER BY `username` ASC';
                break;
        }

        $db = new database();
        $response = $db -> getAll($query);

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
}

?>