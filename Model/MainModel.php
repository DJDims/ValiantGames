<?php
class MainModel {
    public static function createAdmin() {
        $countUsers = UserModel::countUsers();
        if (count($countUsers) == 0) {
            $password = password_hash('12345', PASSWORD_DEFAULT);
            
            $query = "INSERT INTO `users`(`username`, `password`, `wallet`, `role`) VALUES ('Admin', '$password', 0.00, 3)";
            $db = new database();
            $db -> executeRun($query);
        }
        return;
    }
}
?>