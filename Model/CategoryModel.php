<?php

class CategoryModel{
    public static function findAllCategories() {
        $query = "SELECT * FROM `categories` ORDER BY `categoryTitle` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findCategoryById($id) {
        $query = "SELECT * FROM `categories` WHERE categoryId = '$id'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countCategories() {
        $query = "SELECT COUNT(categoryTitle) FROM `categories`";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countGamesByCategoryId($id) {
        $query = "SELECT COUNT(title) FROM `games` WHERE categoryId = '$id'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function addCategory() {
        $result = false;
        if (isset($_POST['send'])) {
            $title = trim($_POST['categoryTitle']);

            if ($title != '') {
                $query = "INSERT INTO `categories`(`categoryTitle`) VALUES ('$title')";
                $db = new database();
                $response = $db -> executeRun($query);
                
                if ($response == true){
                    $result = true;
                }
            }
        }

        return $result;
    }

    public static function editCategory($id) {
        $result = false;
        if (isset($_POST['send'])) {
            $title = trim($_POST['categoryTitle']);
            $updated_at = date("Y-m-d H:i:s");

            if ($title != '') {
                $query = "UPDATE `categories` SET `categoryTitle`='$title',`updated_at`='$updated_at' WHERE categoryId = '$id';";
                $db = new database();
                $response = $db -> executeRun($query);

                if ($response == true){
                    $result = true;
                }
            }
        }
        
        return $result;
    }

    public static function deleteCategory($id) {
        $result = false;

        if (isset($_POST['send'])) {
            $query = "DELETE FROM `categories` WHERE `categoryId` = '$id'";
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