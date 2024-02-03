<?php
class DatabaseConnectionii
{
    private $host = "localhost";
    private $username = "rooot";
    private $password = "";
    private $db = "demo";

    function startConnection()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=demo", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (!$conn) {
                echo "Connection failed";
              
            } else {
               
                return $conn;
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}

$db = new DatabaseConnectionii();
$conn = $db->startConnection();


/*if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}*/
?>