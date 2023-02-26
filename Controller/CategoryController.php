<?php

class CategoryController{
    public static function showTableCategories() {
        $categories = CategoryModel::findAllCategories();
        include_once('View/categoryTable.php');
        return;
    }
    
    public static function showAddCategory() {
        include_once('View/categoryAdd.php');
        return;
    }
    
    public static function addCategory() {
        $result = CategoryModel::addCategory();

        if ($result == true) {
            $_SESSION['message'] = 'Данные добавлены';
            header('Location: showTableCategories');
        } else {
            $error = 'Не удалось добавить данные';
            include_once('View/categoryAdd.php');
        }

        return;
    }
    
    public static function showEditCategory($categoryId) {
        $category = CategoryModel::findCategoryById($categoryId);
        
        include_once('View/categoryEdit.php');
        return;
    }
    
    public static function editCategory($categoryId) {
        $result = CategoryModel::editCategory($categoryId);
        
        if ($result == true) {
            $_SESSION['message'] = 'Данные обновлены';
            header('Location: showTableCategories');
        } else {
            $error = 'Не удалось обновить данные';
            include_once('View/categoryEdit.php');
        }

        return;
    }
    
    public static function showDeleteCategory($categoryId) {
        $category = CategoryModel::findCategoryById($categoryId);
        $countGames = CategoryModel::countGamesByCategoryId($categoryId);

        include_once('View/categoryDelete.php');
        return;
    }
    
    public static function deleteCategory($categoryId) {
        $result = CategoryModel::deleteCategory($categoryId);

        if ($result == true) {
            $_SESSION['message'] = 'Данные удалены';
            header('Location: showTableCategories');
        } else {
            $error = 'Не удалось удалить данные';
            include_once('View/categoryDelete.php');
        }

        return;
    }
}

?>