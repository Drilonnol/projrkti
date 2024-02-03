<?php
class DatabaseConnectioniiii
{
    private $host = "localhost";
    private $username = "drilon";
    private $password = "";
    private $db = "rezervimi";

    function startConnection()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=rezervimi", $this->username, $this->password);
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

$db = new DatabaseConnectioniiii();
$conn = $db->startConnection();


/*if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}*/
?>