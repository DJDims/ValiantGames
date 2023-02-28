<?php

class GameModel{
    public static function findAllGames() {
        $query = "SELECT * FROM `games` ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findGameById($gameId) {
        $query = "SELECT * FROM `games` WHERE id = '$gameId' ";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function findGamesByYear($year) {
        $query = "SELECT * FROM `games` WHERE `publishYear` = '$year' ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }
    
    public static function findGamesByCompany($companyId) {
        $query = "SELECT * FROM `games` WHERE `companyId` = '$companyId' ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }
    
    public static function findGamesByCategory($categoryId) {
        $query = "SELECT * FROM `games` WHERE `categoryId` = '$categoryId' ORDER BY `title` ASC";
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
            $q = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId WHERE id = '$id';";
            $r = $db -> getOne($q);
            array_push($games, $r);
        }
        return $games;
    }

    public static function findLibrary($userId) {
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId WHERE id IN (SELECT gameId FROM `game_user` WHERE userId = '$userId' AND status = 2 ORDER BY created_at DESC);";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findWhisList($userId) {
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId WHERE id IN (SELECT gameId FROM `game_user` WHERE userId = '$userId' AND status = 1 ORDER BY created_at DESC);";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findGamesByBundle($bundleId) {
        $response = array();

        $query = "SELECT * FROM `games` WHERE id IN (SELECT gameId FROM game_bundle WHERE bundleId = '$bundleId')";
        $db = new database();
        $res = $db -> getAll($query);
        
        array_push($response, $res);
        
        $query = "SELECT * FROM `games` WHERE id NOT IN (SELECT gameId FROM game_bundle WHERE bundleId = '$bundleId')";
        $res = $db -> getAll($query);
        
        array_push($response, $res);

        return $response;
    }

    public static function countGamesByBundle($bundleId) {
        $query = "SELECT COUNT(id) FROM `game_bundle` WHERE bundleId = '$bundleId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function addGame() {
        $result = false;
        if (isset($_POST['send'])) {
            $title = ucfirst(strtolower(trim($_POST['gameTitle'])));
            $company = $_POST['company'];
            $category = $_POST['category'];
            $year = $_POST['gameYear'];
            $price = $_POST['gamePrice'];
            $poster = trim($_POST['gamePoster']);
            $description = trim($_POST['gameDescription']);

            if ($title != '') {
                $query = "INSERT INTO `games`(`title`, `companyId`, `categoryId`, `publishYear`, `poster`, `price`, `description`) VALUES ('$title','$company','$category','$year','$poster','$price','$description');";
                $db = new database();
                $response = $db -> executeRun($query);
                
                if ($response == true){
                    $result = true;
                }
            }
        }

        return $result;
    }

    public static function editGame($gameId) {
        $result = false;
        if (isset($_POST['send'])) {
            $title = ucfirst(strtolower(trim($_POST['gameTitle'])));
            $company = $_POST['company'];
            $category = $_POST['category'];
            $year = $_POST['gameYear'];
            $price = $_POST['gamePrice'];
            $poster = trim($_POST['gamePoster']);
            $description = trim($_POST['gameDescription']);
            $updated_at = date("Y-m-d H:i:s");

            if ($title != '') {
                $query = "UPDATE `games` SET `title`='$title',`publishYear`='$year',`companyId`='$company',`poster`='$poster',`description`='$description',`price`='$price',`categoryId`='$category',`updated_at`='$updated_at' WHERE id = '$gameId';";
                $db = new database();
                $response = $db -> executeRun($query);
                
                if ($response == true){
                    $result = true;
                }
            }
        }

        return $result;
    }

    public static function deleteGame($gameId) {
        $result = false;

        if (isset($_POST['send'])) {
            $query = "DELETE FROM `games` WHERE `id` = '$gameId'";
            $db = new database();
            $response = $db -> executeRun($query);

            if ($response == true){
                $result = true;
            }
        }
        
        return $result;
    }
}

?>