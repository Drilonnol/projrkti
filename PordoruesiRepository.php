<?php 
      include_once('Lidhja.php');
    class PordoruesiRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnection;
            $this->connection = $conn->startConnection();
        }

        public function insertPordorues($pordoruesi){
            $conn= $this->connection;
            $emri=$pordoruesi->getEmrimbiemri();
            $email=$pordoruesi->getEmail();
            $password=$pordoruesi->getPasword();
            $confirmimi=$pordoruesi->getConfirmimiPasword();

            $sql="INSERT INTO rigjistrimi2(Emri,Email,pass,confirmimi) values (?,?,?,?)";
            $statement = $conn->prepare($sql);
        
           $statement->execute([$emri, $email, $password,$confirmimi]);


            echo "<script>alert('U shtua me sukses!')</script>";
        }
        public function getAllPordoruesit(){
            $conn= $this->connection;
            $sql="SELECT * FROM  rigjistrimi2";
            $statement = $conn->query($sql);
            
            $pordoruesit=$statement->fetchAll();
            return $pordoruesit;
        }
    }




?>