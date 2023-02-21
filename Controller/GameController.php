<?php

class GameController{
    public static function showAddForm() {
        $companies = CompanyModel::findAllCompanies();
        $categories = CategoryModel::findAllCategories();

        include_once('View/GameAdd.php');
        return;
    }
}

?>