<?php

class GameModel{
    public static function findAllGames() {
        $query = 'SELECT * FROM `game` ORDER BY `title` ASC';
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findGamesByYear($year) {
        $query = "SELECT * FROM `game` WHERE `publishYear` = '$year' ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }
    
    public static function findGamesByCompany($companyId) {
        $query = "SELECT * FROM `game` WHERE `companyId` = '$companyId' ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }
    
    public static function findGamesByCategory($categoryId) {
        $query = "SELECT * FROM `game` WHERE `categoryId` = '$categoryId' ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function addGame() {
        
    }

    public static function editGame($id) {
        
    }

    public static function removeGame($id) {
        
    }
}

?>