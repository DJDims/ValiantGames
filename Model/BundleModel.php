<?php

class BundleModel{
    public static function findAllBundles() {
        $query = "SELECT * FROM `bundles` ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findBundleById($bundleId) {
        $query = "SELECT * FROM `bundles` WHERE id = '$bundleId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countBundlesByGame($gameId) {
        $query = "SELECT COUNT(id) FROM `game_bundle` WHERE gameId = '$gameId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function addBundle() {
        if (!isset($_POST['send'])) {
            return false;
        }
        
        $title = ucfirst(strtolower(trim($_POST['bundleTitle'])));
        $price = $_POST['bundlePrice'];
        $games = $_POST['bundleGames'];
        
        if ($title == '' || count($_POST['bundleGames']) == 0) {
            return false;
        }
        
        $db = new database();
        $query = "INSERT INTO `bundles`(`title`, `price`) VALUES ('$title', '$price')";
        $response = $db -> executeRun($query);
        $bundleId = $db -> getLastId();
                
        foreach ($games as $k => $v) {
            $query = "INSERT INTO `game_bundle`(`gameId`, `bundleId`) VALUES ('$v','$bundleId')";
            $response = $db -> executeRun($query);
        }
                
        if ($response != true){
            return false;
        }

        return true;
    }

    public static function editBundle($bundleId) {
        if (!isset($_POST['send'])) {
            return false;
        }


        $title = ucfirst(strtolower(trim($_POST['bundleTitle'])));
        $price = $_POST['bundlePrice'];
        $games = $_POST['bundleGames'];

        if ($title == '' || count($_POST['bundleGames']) == 0) {
            return false;
        }

        $db = new database();
        $query = "UPDATE `bundles` SET `title`='$title',`price`='$price' WHERE id = '$bundleId'";
        $response = $db -> executeRun($query);
        $query = "DELETE FROM `game_bundle` WHERE bundleId = '$bundleId'";
        $response = $db -> executeRun($query);
                
        foreach ($games as $k => $v) {
            $query = "INSERT INTO `game_bundle`(`gameId`, `bundleId`) VALUES ('$v','$bundleId')";
            $response = $db -> executeRun($query);
        }
                
        if ($response != true){
            return false;
        }

        return true;
    }

    public static function deleteBundle($bundleId) {
        if (!isset($_POST['send'])) {
            return false;
        }
        
        $db = new database();
        $query = "DELETE FROM `game_bundle` WHERE `bundleId` = '$bundleId'";
        $response = $db -> executeRun($query);
        $query = "DELETE FROM `bundles` WHERE `id` = '$bundleId'";
        $response = $db -> executeRun($query);

        if ($response != true){
            return false;
        }
        
        return true;
    }
}

?>