<?php

class GameModel{
    public static function findAllGames() {
        $query = "SELECT * FROM `games` ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findAllGamesByOffset($offset) {
        $query = "SELECT * FROM `games` ORDER BY `title` ASC LIMIT 10 OFFSET $offset";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findGameById($gameId) {
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId INNER JOIN companies ON games.companyId = companies.companyId WHERE games.id = '$gameId'";
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
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId WHERE `companyId` = '$companyId' ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }
    
    public static function findGamesByCategory($categoryId) {
        $query = "SELECT * FROM `games` INNER JOIN companies ON games.companyId = companies.companyId WHERE `categoryId` = '$categoryId' ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    
    public static function findGamesOrderBy($orderBy, $orderType) {
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId ORDER BY $orderBy $orderType";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findGamesOrderByPurchases($limit=0) {
        $query = "SELECT gameId, COUNT(userId) FROM `game_user` WHERE status = 2 GROUP BY gameId ORDER BY COUNT(userId) DESC";
        if ($limit > 0) {
            $query .= " LIMIT $limit";
        }
        $db = new database();
        $response = $db -> getAll($query);

        $games = array();
        foreach ($response as $k => $v) {
            $id = $v['gameId'];
            $q = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId WHERE id = '$id'";
            $r = $db -> getOne($q);
            array_push($games, $r);
        }
        return $games;
    }

    public static function findGamesOrderByDateAdd($limit=0) {
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId ORDER BY g_created_at DESC";
        if ($limit > 0) {
            $query .= " LIMIT $limit";
        }
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findLibrary($userId, $limit=0) {
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId INNER JOIN companies ON games.companyId = companies.companyId WHERE id IN (SELECT gameId FROM `game_user` WHERE userId = '$userId' AND status = 2 ORDER BY created_at DESC)";
        if ($limit > 0) {
            $query .= " LIMIT $limit";
        }
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findWhisList($userId, $limit=0) {
        $query = "SELECT * FROM `games` INNER JOIN categories ON games.categoryId = categories.categoryId INNER JOIN companies ON games.companyId = companies.companyId WHERE id IN (SELECT gameId FROM `game_user` WHERE userId = '$userId' AND status = 1 ORDER BY created_at DESC)";
        if ($limit > 0) {
            $query .= " LIMIT $limit";
        }
        $db = new database();
        $response = $db -> getAll($query);
        
        return $response;
    }
    
    public static function findUserStatus($gameId, $userId) {
        $query = "SELECT status FROM game_user WHERE userId = '$userId' AND gameId = '$gameId'";
        $db = new database();
        $response = $db -> getOne($query);
    
        return $response;
    }
    
    public static function findDistinctYears() {
        $query = "SELECT DISTINCT publishYear FROM games ORDER BY publishYear ASC";
        $db = new database();
        $response = $db -> getAll($query);
    
        return $response;
    }

    public static function findByKeyword($keyword) {
        $query = "SELECT * FROM games INNER JOIN categories ON games.categoryId = categories.categoryId INNER JOIN companies ON games.companyId = companies.companyId WHERE title LIKE '%$keyword%' ";
        $db = new database();
        $response = $db -> getAll($query);
    
        return $response;
    }

    public static function findByOptions() {
        $keyword = trim($_POST['keyword']);
        $company = $_POST['company'];
        $category = $_POST['category'];
        $year = $_POST['year'];

        $query = "SELECT * FROM games INNER JOIN categories ON games.categoryId = categories.categoryId INNER JOIN companies ON games.companyId = companies.companyId";

        if ($keyword != '' || $company != '' || $category != '' || $year != '') {
            $query .= ' WHERE';    

            if ($keyword != '') {
                $query .= " title LIKE '%$keyword%' ";
            }

            if ($company != '') {
                if (str_ends_with($query, " ") == true) {
                    $query .= " AND";
                }
                $query .= " games.companyId = '$company' ";
            }

            if ($category != '') {
                if (str_ends_with($query, " ") == true) {
                    $query .= " AND";
                }
                $query .= " games.categoryId = '$category' ";
            }

            if ($year != '') {
                if (str_ends_with($query, " ") == true) {
                    $query .= " AND";
                }
                $query .= " publishYear = '$year'";
            }
        }

        $db = new database();
        $response = $db -> getAll($query);
    
        return $response;
    }

    public static function countPages() {
        $query = "SELECT COUNT(id) FROM `games`";
        $db = new database();
        $response = $db -> getOne($query);

        $pagesCount = ceil($response['COUNT(id)'] / 10);

        return $pagesCount;
    }

    public static function addGame() {
        if (!isset($_POST['send'])) {
            return false;
        }

        $title = ucfirst(strtolower(trim($_POST['gameTitle'])));
        $company = $_POST['company'];
        $category = $_POST['category'];
        $year = $_POST['gameYear'];
        $price = $_POST['gamePrice'];
        $poster = trim($_POST['gamePoster']);
        $description = trim($_POST['gameDescription']);

        if ($title == '') {
            return false;
        }
        $query = "INSERT INTO `games`(`title`, `companyId`, `categoryId`, `publishYear`, `poster`, `price`, `description`) VALUES ('$title','$company','$category','$year','$poster','$price','$description')";
        $db = new database();
        $response = $db -> executeRun($query);
        
        if ($response != true){
            return false;
        }

        return true;
    }

    public static function editGame($gameId) {
        if (!isset($_POST['send'])) {
            return false;
        }

        $title = ucfirst(strtolower(trim($_POST['gameTitle'])));
        $company = $_POST['company'];
        $category = $_POST['category'];
        $year = $_POST['gameYear'];
        $price = $_POST['gamePrice'];
        $poster = trim($_POST['gamePoster']);
        $description = trim($_POST['gameDescription']);

        if ($title == '') {
            return false;
        }

        $query = "UPDATE `games` SET `title`='$title',`publishYear`='$year',`companyId`='$company',`poster`='$poster',`description`='$description',`price`='$price',`categoryId`='$category' WHERE id = '$gameId'";
        $db = new database();
        $response = $db -> executeRun($query);
            
        if ($response != true){
            return false;
        }

        return true;
    }

    public static function deleteGame($gameId) {
        if (!isset($_POST['send'])) {
            return false;
        }

        $query = "DELETE FROM `games` WHERE `id` = '$gameId'";
        $db = new database();
        $response = $db -> executeRun($query);

        if ($response != true){
            return false;
        }
        
        return true;
    }
}

?>