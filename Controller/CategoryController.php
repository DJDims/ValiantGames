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
            $_SESSION['alert']['message'] = 'Данные добавлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось добавить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableCategories');
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
            $_SESSION['alert']['message'] = 'Данные обновлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось обновить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableCategories');
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
            $_SESSION['alert']['message'] = 'Данные удалены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось удалить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableCategories');
        return;
    }
}

?>