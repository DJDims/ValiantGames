<?php
class MainModel {
    public static function createAdmin() {
        $countUsers = UserModel::countUsers();

        if ($countUsers['COUNT(id)'] == 0) {
            $password = password_hash('12345', PASSWORD_DEFAULT);
            $query = "INSERT INTO `users`(`username`, `password`, `role`) VALUES ('Admin', '$password', 3)";
            $db = new database();
            $db -> executeRun($query);
        }

        return;
    }
}
?>