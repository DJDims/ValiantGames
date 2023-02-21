<?php

class CompanyController{
    public static function showAddCompany() {
        include_once('View/companyForm.php');
        return;
    }

    public static function addCompany() {
        $result = CompanyModel::addCompany();
        if ($result == true) {
            $_SESSION['message'] = 'Данные добавлены';
            header('Location: companiesList');
        } else {
            $error = 'Не удалось добавить данные';
            include_once('View/companyForm.php');
        }
        return;
    }
}

?>