<?php

class CompanyController{
    public static function showTableCompanies() {
        $companies = CompanyModel::findAllCompanies();
        include_once('View/companyTable.php');
        return;
    }

    public static function showAddCompany() {
        include_once('View/companyAdd.php');
        return;
    }
    
    public static function addCompany() {
        $result = CompanyModel::addCompany();

        if ($result == true) {
            $_SESSION['message'] = 'Данные добавлены';
            header('Location: showTableCompanies');
        } else {
            $error = 'Не удалось добавить данные';
            include_once('View/companyAdd.php');
        }

        return;
    }
    
    public static function showEditCompany($id) {
        $company = CompanyModel::findCompanyById($id);
        include_once('View/companyEdit.php');
    }
    
    public static function editCompany($id) {
        $result = CompanyModel::editCompany($id);

        if ($result == true) {
            $_SESSION['message'] = 'Данные обновлены';
            header('Location: showTableCompanies');
        } else {
            $error = 'Не удалось обновить данные';
            include_once('View/companyEdit.php');
        }

        return;
    }
    
    public static function showDeleteCompany($id) {
        $company = CompanyModel::findCompanyById($id);
        $countGames = CompanyModel::countGamesByCompanyId($id);
        include_once('View/companyDelete.php');
    }
    
    public static function deleteCompany($id) {
        $result = CompanyModel::deleteCompany($id);

        if ($result == true) {
            $_SESSION['message'] = 'Данные удалены';
            header('Location: showTableCompanies');
        } else {
            $error = 'Не удалось удалить данные';
            include_once('View/companyDelete.php');
        }
        
        return;
    }
}

?>