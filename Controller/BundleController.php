<?php

class BundleController{
    public static function showTableBundles() {
        $bundles = BundleModel::findAllBundles();
        include_once('View/bundleTable.php');
        return;
    }

    public static function showAddBundle() {
        $games = GameModel::findAllGames();
        include_once('View/bundleAdd.php');
        return;
    }

    public static function addBundle() {
        $result = BundleModel::addBundle();

        if ($result == true) {
            $_SESSION['message'] = 'Данные добавлены';
            header('Location: showTableBundles');
        } else {
            $error = 'Не удалось добавить данные';
            include_once('View/bundleAdd.php');;
        }

        return;
    }

    public static function showEditBundle($bundleId){
        $bundle = BundleModel::findBundleById($bundleId);
        $games = GameModel::findGamesByBundle($bundleId);
        
        include_once('View/bundleEdit.php');
        return;
    }
    
    public static function editBundle($bundleId){
        $result = BundleModel::editBundle($bundleId);

        if ($result == true) {
            $_SESSION['message'] = 'Данные обновлены';
            header('Location: showTableBundles');
        } else {
            $error = 'Не удалось обновить данные';
            include_once('View/bundleEdit.php');
        }

        return;
    }
    
    public static function showDeleteBundle($bundleId){
        $bundle = BundleModel::findBundleById($bundleId);
        $countGames = GameModel::countGamesByBundle($bundleId);
        
        include_once('View/bundleDelete.php');
        return;
    }

    public static function deleteBundle($bundleId){
        $result = BundleModel::deleteBundle($bundleId);

        if ($result == true) {
            $_SESSION['message'] = 'Данные удалены';
            header('Location: showTableBundles');
        } else {
            $error = 'Не удалось удалить данные';
            include_once('View/bundleDelete.php');
        }
        
        return;
    }
}

?>