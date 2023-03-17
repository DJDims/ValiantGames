<?php

class CompanyController{
    public static function showTableCompanies($page) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }
        
        $offset = ($page-1)*10;

        $companies = CompanyModel::findAllCompaniesByOffset($offset);
        $pagesCount = CompanyModel::countPages();
        $pageNumber = $page;

        $_SESSION['currentPage'] = 'companies';
        
        include_once('View/companyTable.php');
        return;
    }

    public static function showCompanyDetails($companyId) {
        $company = CompanyModel::findCompanyById($companyId);
        $games = GameModel::findGamesByCompany($companyId);
        
        include_once('View/companyDetails.php');
        return;
    }

    public static function showAddCompany() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

        include_once('View/companyAdd.php');
        return;
    }
    
    public static function addCompany() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

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
        
        header('Location: showTableCompanies?1');
        return;
    }
    
    public static function showEditCompany($companyId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

        $company = CompanyModel::findCompanyById($companyId);
        
        include_once('View/companyEdit.php');
        return;
    }
    
    public static function editCompany($companyId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

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
        
        header('Location: showTableCompanies?1');
        return;
    }
    
    public static function showDeleteCompany($companyId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

        $company = CompanyModel::findCompanyById($companyId);
        $countGames = CompanyModel::countGamesByCompanyId($companyId);

        if ($company) {
            include_once('View/companyDelete.php');
        } else {
            header('Location: showTableCompanies?1');
        }

        return;
    }
    
    public static function deleteCompany($companyId) {
        if (!isset($_SESSION['role']) || $_SESSION['role'] == 'USER') {
            header('Location: error403');
            return;
        }

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
        
        header('Location: showTableCompanies?1');
        return;
    }
}

?>