<?php


abstract class Connection{
    
    private string $localhost = "localhost";
    private string $username = "root";  
    private string $db_password = "";
    private string $db_name = "culturedev";

    protected function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->localhost;dbname=$this->db_name", $this->username, $this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return $e;
        }
    }
}

?>