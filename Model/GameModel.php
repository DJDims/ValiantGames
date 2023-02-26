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

    public static function findGamesOrderByPurchases() {
        $query = "SELECT gameId, COUNT(userId) FROM `game_user` WHERE status = 2 GROUP BY gameId ORDER BY COUNT(userId) DESC LIMIT 8;";
        $db = new database();
        $response = $db -> getAll($query);

        $games = array();
        foreach ($response as $k => $v) {
            $id = $v['gameId'];
            $q = "SELECT * FROM games INNER JOIN categories ON games.categoryId = categories.categoryId WHERE id = '$id';";
            $r = $db -> getOne($q);
            array_push($games, $r);
        }
        return $games;
    }

    public static function findWhisList($userId) {
        $query = "SELECT * FROM games INNER JOIN categories ON games.categoryId = categories.categoryId WHERE id IN (SELECT gameId FROM `game_user` WHERE userId = '$userId' AND status = 1 ORDER BY created_at DESC);";
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