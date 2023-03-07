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
            $_SESSION['alert']['message'] = 'Данные добавлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось добавить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableBundles');
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
            $_SESSION['alert']['message'] = 'Данные обновлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось обновить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableBundles');
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
            $_SESSION['alert']['message'] = 'Данные удалены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось удалить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableBundles');
        return;
    }
}

?>