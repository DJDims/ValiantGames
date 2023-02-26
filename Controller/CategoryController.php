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
    
    public static function showEditCategory($id) {
        $category = CategoryModel::findCategoryById($id);
        include_once('View/categoryEdit.php');
    }
    
    public static function editCategory($id) {
        $result = CategoryModel::editCategory($id);
        
        if ($result == true) {
            $_SESSION['message'] = 'Данные обновлены';
            header('Location: showTableCategories');
        } else {
            $error = 'Не удалось обновить данные';
            include_once('View/categoryEdit.php');
        }

        return;
    }
    
    public static function showDeleteCategory($id) {
        $category = CategoryModel::findCategoryById($id);
        $countGames = CategoryModel::countGamesByCategoryId($id);
        include_once('View/categoryDelete.php');
    }
    
    public static function deleteCategory($id) {
        $result = CategoryModel::deleteCategory($id);

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