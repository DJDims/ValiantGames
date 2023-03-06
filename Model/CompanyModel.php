<?php

class CompanyModel{
    public static function findAllCompanies() {
        $query = "SELECT * FROM `companies` ORDER BY `companyTitle` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findCompanyById($companyId) {
        $query = "SELECT * FROM `companies` WHERE companyId ='$companyId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countCompanies() {
        $query = "SELECT COUNT(id) FROM `companies`";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countGamesByCompanyId($companyId) {
        $query = "SELECT COUNT(id) FROM `games` WHERE companyId = '$companyId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function addCompany() {
        if (!isset($_POST['send'])) {
            return false;
        }
        
        $title = trim($_POST['companyTitle']);

        if ($title == '') {
            return false;
        }

        $query = "INSERT INTO `companies`(`companyTitle`) VALUES ('$title')";
        $db = new database();
        $response = $db -> executeRun($query);
        
        if ($response != true){
            return false;
        }

        return true;
    }

    public static function editCompany($companyId) {
        if (!isset($_POST['send'])) {
            return false;
        }
        
        $title = trim($_POST['companyTitle']);

        if ($title == '') {
            return false;
        }

        $query = "UPDATE `companies` SET `companyTitle`='$title' WHERE companyId = '$companyId';";
        $db = new database();
        $response = $db -> executeRun($query);

        if ($response != true){
            return false;
        }

        return true;
    }

    public static function deleteCompany($companyId) {
        if (!isset($_POST['send'])) {
            return false;
        }

        $query = "DELETE FROM `companies` WHERE `companyId` = '$companyId'";
        $db = new database();
        $response = $db -> executeRun($query);

        if ($response != true){
            return false;
        }
        
        return true;
    }
}

?>