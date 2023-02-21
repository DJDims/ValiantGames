<?php

class CategoryModel{
    public static function findAllCategories() {
        $query = 'SELECT * FROM `category` ORDER BY `title` ASC';
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function addCategory() {
        
    }

    public static function editCategory($id) {
        
    }

    public static function removeCategory($id) {
        
    }
}

?>