<?php

class CategoryController{
    public static function showTableCategories($page) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

        $offset = ($page-1)*10;

        $categories = CategoryModel::findAllCategoriesByOffset($offset);
        $pagesCount = CategoryModel::countPages();
        $pageNumber = $page;
        
        include_once('View/categoryTable.php');
        return;
    }

    public static function showCategoryDetails($categoryId) {
        $category = CategoryModel::findCategoryById($categoryId);
        $games = GameModel::findGamesByCategory($categoryId);
        
        include_once('View/categoryDetails.php');
        return;
    }
    
    public static function showAddCategory() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

        include_once('View/categoryAdd.php');
        return;
    }
    
    public static function addCategory() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

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
        
        header('Location: showTableCategories?1');
        return;
    }
    
    public static function showEditCategory($categoryId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

        $category = CategoryModel::findCategoryById($categoryId);
        
        include_once('View/categoryEdit.php');
        return;
    }
    
    public static function editCategory($categoryId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

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
        
        header('Location: showTableCategories?1');
        return;
    }
    
    public static function showDeleteCategory($categoryId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

        $category = CategoryModel::findCategoryById($categoryId);
        $countGames = CategoryModel::countGamesByCategoryId($categoryId);

        include_once('View/categoryDelete.php');
        return;
    }
    
    public static function deleteCategory($categoryId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
        
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
        
        header('Location: showTableCategories?1');
        return;
    }
}

?>