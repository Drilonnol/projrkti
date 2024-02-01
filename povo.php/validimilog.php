<?php

class ValidimiKlase {
    private $emri;
    private $email;
    private $password;

    private $emri_error = '';
    private $email_error = '';
    private $password_error = '';
    
    public function __construct($emri, $email, $password) {
        $this->emri = $emri;
        $this->email = $email;
        $this->password = $password;
    }

    public function validimi() {
        $this->validoEmrin();
        $this->validoEmail();
        $this->validoPassword();

        return empty($this->emri_error) && empty($this->email_error) && empty($this->password_error);
    }

    private function validoEmrin() {
        if (empty($this->emri)) {
            $this->emri_error = "Emri .";
        } elseif (strlen($this->emri) < 3) {
            $this->emri_error = "Emri duhet të kete te pakten 3 shkronja.";
        }
    }

    private function validoEmail() {
        if (empty($this->email)) {
            $this->email_error = "Email eshte i detyrueshem.";
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->email_error = "Format i pasakte i email-it.";
        } elseif (!preg_match('/@.*\.com$/', $this->email)) {
            $this->email_error = "* Email-i duhet te kete formatin e duhur (user@example.com).";
        }
    }

    private function validoPassword() {
        if (empty($this->password)) {
            $this->password_error = "Password  i detyrueshem.";
        } elseif (strlen($this->password) < 8 && !preg_match('/[a-zA-Z]/', $this->password) && !preg_match('/\d/', $this->password)) {
            $this->password_error = "* password duhet te kete 8 karaktere dhe te kete shkronja me numra.";
        }
    }

    public function merrEmrinError() {
        return $this->emri_error;
    }

    public function merrEmailError() {
        return $this->email_error;
    }

    public function merrPasswordError() {
        return $this->password_error;
    }
}