<?php

class CompanyModel{
    public static function findAllCompanies() {
        $query = "SELECT * FROM `companies` ORDER BY `title` ASC";
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function findCompanyById($companyId) {
        $query = "SELECT * FROM `companies` WHERE id ='$companyId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countCompanies() {
        $query = "SELECT COUNT(title) FROM `companies`";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function countGamesByCompanyId($companyId) {
        $query = "SELECT COUNT(title) FROM `games` WHERE companyId = '$companyId'";
        $db = new database();
        $response = $db -> getOne($query);

        return $response;
    }

    public static function addCompany() {
        $result = false;
        if (isset($_POST['send'])) {
            $title = trim($_POST['companyTitle']);

            if ($title != '') {
                $query = "INSERT INTO `companies`(`title`) VALUES ('$title')";
                $db = new database();
                $response = $db -> executeRun($query);
                
                if ($response == true){
                    $result = true;
                }
            }
        }

        return $result;
    }

    public static function editCompany($companyId) {
        $result = false;
        if (isset($_POST['send'])) {
            $title = trim($_POST['companyTitle']);
            $updated_at = date("Y-m-d H:i:s");

            if ($title != '') {
                $query = "UPDATE `companies` SET `title`='$title',`updated_at`='$updated_at' WHERE id = '$companyId';";
                $db = new database();
                $response = $db -> executeRun($query);

                if ($response == true){
                    $result = true;
                }
            }
        }

        return $result;
    }

    public static function deleteCompany($companyId) {
        $result = false;

        if (isset($_POST['send'])) {
            $query = "DELETE FROM `companies` WHERE `id` = '$companyId'";
            $db = new database();
            $response = $db -> executeRun($query);

            if ($response == true){
                $result = true;
            }
        }
        
        return $result;
    }
}

?>