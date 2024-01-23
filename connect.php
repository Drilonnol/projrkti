<?php

class DatabaseConnection{
    //keto te dhena i merrni ne baze te databazes suaj
    private $host = "localhost";
    private $username = "st";
    private $password = "";
    private $db = "projekti";

function startConnection(){
    try{
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(!$conn){
            //echo "Connection failed "; per testim
           // return null;
           echo"Suksese";
        }else{
            //echo "Connection successful!"; per testim
            return $conn;
        }
        
    }catch(PDOException $e){
        echo "Connection failed ". $e->getMessage();
        return null;
    }
}
}


















/* $emri=filter_input(INPUT_POST, 'emrimbiemri');
   $email=filter_input(INPUT_POST, 'email');
   $password=filter_input(INPUT_POST,'password');
   $confirmim=filter_input(INPUT_POST,'confirmimi');

   if(!empty($emri)){
   if(!empty($email)){
    if(!empty($password)){
        $host="localhost";
        $dbusername="root@localhost";
        $dbpassword="";
        $dbname="wizzair";

        //lidhja me database
        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('Connect Erroe('.mysqli_connect_errno().')'
            .mysqli_connect_error());
        }else{
            $sql="INSERT INTO singin (emri, email, password) values('$emri','$email','$password')";
            if($conn->query($sql)){
                echo"Regjistrim i ri me sukses ";
            }
            else{
                echo"Error:".$sql."<br>".$conn->error;
            }
            $conn->close();
        }

    }else{
        echo"Password gabim";
        die();
    }

   }else{
    echo"Email zbrazet";
    die();

   }

   }else{
    echo"ESHTE GABIM";
    die();
   }

*/

?>