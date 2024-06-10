<?php

$config = require "/home/dckap/php_task/config.php";
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->dbConnection();

class DatabaseConnection
{
    public $connection;
    
    public function __construct($config)
    {
        $this->connection = new mysqli($config["host"], $config["username"], $config["password"], $config["dbname"]);
        
        if ($this->connection->connect_errno) {
            echo "Connection error: " . $this->connection->connect_error;
        }
    }
    
    public function dbConnection()
    {
        return $this->connection;
    }
}

?>
