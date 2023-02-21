<?php

class BundleModel{
    public static function findAllBundles() {
        $query = 'SELECT * FROM `bundle` ORDER BY `title` ASC';
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function addBundle() {
        
    }

    public static function editBundle($id) {
        
    }

    public static function removeBundle($id) {
        
    }
}

?>