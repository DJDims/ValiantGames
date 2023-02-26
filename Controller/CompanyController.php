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
    
    public static function showEditCompany($companyId) {
        $company = CompanyModel::findCompanyById($companyId);
        include_once('View/companyEdit.php');
        return;
    }
    
    public static function editCompany($companyId) {
        $result = CompanyModel::editCompany($companyId);

        if ($result == true) {
            $_SESSION['message'] = 'Данные обновлены';
            header('Location: showTableCompanies');
        } else {
            $error = 'Не удалось обновить данные';
            include_once('View/companyEdit.php');
        }

        return;
    }
    
    public static function showDeleteCompany($companyId) {
        $company = CompanyModel::findCompanyById($companyId);
        $countGames = CompanyModel::countGamesByCompanyId($companyId);

        include_once('View/companyDelete.php');
        return;
    }
    
    public static function deleteCompany($companyId) {
        $result = CompanyModel::deleteCompany($companyId);

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