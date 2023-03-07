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
            $_SESSION['alert']['message'] = 'Данные добавлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось добавить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableCompanies');
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
            $_SESSION['alert']['message'] = 'Данные обновлены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось обновить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableCompanies');
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
            $_SESSION['alert']['message'] = 'Данные удалены';
            $_SESSION['alert']['type'] = 'alert-success';
            $_SESSION['alert']['icon'] = '#check-circle-fill';
        } else {
            $_SESSION['alert']['message'] = 'Не удалось удалить данные';
            $_SESSION['alert']['type'] = 'alert-danger';
            $_SESSION['alert']['icon'] = '#exclamation-triangle-fill';
        }
        
        header('Location: showTableCompanies');
        return;
    }
}

?>