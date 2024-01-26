<?php
include_once ('lidhjademo.php');
    class demoRepository{
        private $connection;

        public function __construct()
        {
            $conn = new DatabaseConnectionii;
            $this->connection = $conn->startConnection();
        }

    


        public function insertdemo($demolog){
            $conn = $this->connection;

            $emri = $demolog->getEmri();
            $emaili = $demolog->getEmaili();
            $Password=$demolog->getPassword();

            $sql = "INSERT INTO logindemo(Emri,Emaili,Password ) VALUES (?,?,?,?)";

            $statement = $conn->prepare($sql);
            $statement->execute([$emri,$emaili,$Password ]);

            echo "<script>alert('U shtua me sukses!')</script>";
        }

        public function getAllDemo(){
            $conn = $this->connection;

            $sql = "SELECT * FROM logindemo";
            $statement = $conn->query($sql);

            $demolog = $statement->fetchAll();
            return $demolog;
        }


        public function editdemo($id, $emri, $email, $password) {
            $conn = $this->connection;
            $sql = "UPDATE logindemo SET Emri=?, Email=?, Password=? WHERE Id=?";
        
            $statement = $conn->prepare($sql);
            $statement->execute([$emri, $email, $password, $id]);
        
            echo "<script>alert('U ndryshua me sukses!')</script>";
        }
        //delete

        function deletedemo($id){
            $conn = $this->connection;

            $sql = "DELETE FROM logindemo WHERE Id=?";

            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
        }

        //shtese per update: merr studentin ne baze te Id

        function getdeomoById($id){
            $conn = $this->connection;

            $sql = "SELECT * FROM logindemo WHERE Id=?";
            
            $statement = $conn->prepare($sql);
            $statement->execute([$id]);
            $demolog=$statement->fetch();
            return $demolog;
        }

    }

?>