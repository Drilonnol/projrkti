<?php
class Admin {
    private $ID;
    private $Name;
    private $Email;
    private $Password;

    public function __construct($Name, $Email, $Password) {
        $this->Name = $Name;
        $this->Email = $Email;
        $this->setPassword($Password);
    }

    public function getName() {
        return $this->Name;
    }

    public function getEmail() {
        return $this->Email;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function setName($Name) {
        $this->Name = $Name;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    public function setPassword($Password) {
        $this->Password = password_hash($Password, PASSWORD_DEFAULT);
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getID() {
        return $this->ID;
    }

    

    public function __toString() {
        return "ID: " . $this->ID . ", Name: " . $this->Name . ", Email: " . $this->Email . " dhe Password: " . $this->Password;
    }
}
?>