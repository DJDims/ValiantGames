<?php

class CompanyModel{
    public static function findAllCompanies() {
        $query = 'SELECT * FROM `company` ORDER BY `title` ASC';
        $db = new database();
        $response = $db -> getAll($query);

        return $response;
    }

    public static function addCompany() {
        $result = false;
        if (isset($_POST['send'])) {
            $title = trim($_POST['title']);
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

    public static function editCompany($id) {
        
    }

    public static function removeCompany($id) {
        
    }
}

?>