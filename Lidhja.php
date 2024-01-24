<?php
  class DatabaseConnection{
    
    private $host = "localhost";
    private $username = "roott";
    private $password = "";
    private $db = "web";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            echo "Connection failed "; 
           // return null;
           echo"Suksese";
        }else{
            echo "Connection successful!"; 
            return $conn;
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
    }
}

$db=new DatabaseConnection();
$db->startConnection();

?>
