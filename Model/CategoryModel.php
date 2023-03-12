<?php

class CategoryModel{
    public static function findAllCategories() {
        $query = "SELECT * FROM `categories` ORDER BY `categoryTitle` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findCategoryById($categoryId) {
        $query = "SELECT * FROM `categories` WHERE categoryId = '$categoryId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function findDistinctCategories() {
        $query = "SELECT * FROM categories WHERE categoryId IN (SELECT DISTINCT categoryId FROM games)";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function countCategories() {
        $query = "SELECT COUNT(categoryTitle) FROM `categories`";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countGamesByCategoryId($categoryId) {
        $query = "SELECT COUNT(title) FROM `games` WHERE categoryId = '$categoryId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function addCategory() {
        if (!isset($_POST['send'])) {
            return false;
        }

        $title = trim($_POST['categoryTitle']);

        if ($title == '') {
            return false;
        }

        $query = "INSERT INTO `categories`(`categoryTitle`) VALUES ('$title')";
        $db = new database();
        $response = $db -> executeRun($query);
        
        if ($response != true){
            return false;
        }

        return true;
    }

    public static function editCategory($categoryId) {
        if (!isset($_POST['send'])) {
            return false;
        }

        $title = trim($_POST['categoryTitle']);

        if ($title == '') {
            return false;
        }

        $query = "UPDATE `categories` SET `categoryTitle`='$title' WHERE categoryId = '$categoryId';";
        $db = new database();
        $response = $db -> executeRun($query);

        if ($response != true){
            return false;
        }
        
        return true;
    }

    public static function deleteCategory($categoryId) {
        if (!isset($_POST['send'])) {
            return false;
        }

        $query = "DELETE FROM `categories` WHERE `categoryId` = '$categoryId'";
        $db = new database();
        $response = $db -> executeRun($query);

        if ($response != true){
            return false;
        }

        return true;
    }
}

?>