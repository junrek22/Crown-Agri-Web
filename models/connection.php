<?php 
class Connection {
    public function connection() {
        $db_username = "root";
        $db_password = "";
        $db_name = "crown_db";
        $conn = new PDO ("mysql:host=localhost; dbname=$db_name", $db_username,
        $db_password);
        return $conn;
    }
}
?>