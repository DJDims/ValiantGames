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
        $result = false;
        if (isset($_POST['send'])) {
            $title = trim($_POST['bundleTitle']);
            $price = $_POST['bundlePrice'];
            $games = $_POST['bundleGames'];
            
            if ($title != '') {
                $db = new database();
                $query = "INSERT INTO `bundles`(`title`, `price`) VALUES ('$title', '$price')";
                $response = $db -> executeRun($query);
                
                // $query = "SELECT id FROM `bundles` ORDER BY id DESC LIMIT 1";
                $bundleId = $db -> getLastId();
                // echo $bundleId;
                var_dump($bundleId);
                
                foreach ($games as $k => $v) {
                    $query = "INSERT INTO `game_bundle`(`gameId`, `bundleId`) VALUES ('$v','$bundleId')";
                    $db -> executeRun($query);
                }
                
                if ($response == true){
                    $result = true;
                }
            }
        }
        // return $result;
    }

    public static function editBundle($bundleId) {
        $result = false;
        if (isset($_POST['send'])) {
            $title = trim($_POST['bundleTitle']);
            $price = $_POST['bundlePrice'];
            $games = $_POST['bundleGames'];
            $updated_at = date("Y-m-d H:i:s");

            if ($title != '') {
                $query = "UPDATE `bundles` SET `title`='$title',`price`='$price',`updated_at`='$updated_at' WHERE id = '$bundleId'";
                $db = new database();
                $response = $db -> executeRun($query);
                $query = "DELETE FROM `game_bundle` WHERE bundleId = '$bundleId'";
                $response = $db -> executeRun($query);
                
                foreach ($games as $k => $v) {
                    $query = "INSERT INTO `game_bundle`(`gameId`, `bundleId`) VALUES ('$v','$bundleId')";
                    $db = new database();
                    $db -> executeRun($query);
                }
                
                if ($response == true){
                    $result = true;
                }
            }
        }

        return $result;
    }

    public static function deleteBundle($bundleId) {
        $result = false;

        if (isset($_POST['send'])) {
            $query = "DELETE FROM `bundles` WHERE `id` = '$bundleId'";
            $db = new database();
            $response = $db -> executeRun($query);
            $query = "DELETE FROM `game_bundle` WHERE `bundleId` = '$bundleId'";
            $response = $db -> executeRun($query);

            if ($response == true){
                $result = true;
            }
        }
        
        return $result;
    }
}

?>