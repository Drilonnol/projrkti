<?php
class Pordoruesi{
    private $Id; //e kemi Autoinkrement;
    private $emrimbiemri;
    private $email;
    private $password;
    private $confirmimipassword;
    

    public function __construct($em,$e,$p,$cp){
        $this->emrimbiemri=$em;
        $this->email=$e;
        $this->password=$p;
        $this->confirmimipassword=$cp;
    }
    
    public function getEmrimbiemri(){
        return $this->emrimbiemri;
    }
    public function setEmri($em){
        $this->emrimbiemri = $em;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $this->email = $e;
    }

    public function getEmaili(){
        return $this->email;
    }
    public function setEmaili($e){
        $this->Emaili = $e;
    }

    public function getPasword(){
        return $this->password;
    }
    public function setPasword($p){
        $this->password = $p;
    }
    public function getConfirmimiPasword(){
        return $this->confirmimipassword;
    }
    public function setConfirmimiPasword($cp){
        $this->confirmimipassword =  $cp;
    }
    public function __toString(){
        return "Emri: ".$this->emrimbiemri." ".$this->email ." ".$this->password." ".$this->confirmimipassword;
    }
}
$pordoruesi = new Pordoruesi("EmriMbiemri", "example@email.com", "password123","Password123");

$pordoruesi->setEmri("Jane Doe");
echo $pordoruesi;
?>