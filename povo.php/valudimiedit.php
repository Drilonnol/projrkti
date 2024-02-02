
<?php
include_once('validimilog.php');
class ValidimiKlase1 extends ValidimiKlase {
    private $id;
    private $id_error;
    public function __construct($id, $emri, $email, $password) {
        parent::__construct($emri, $email, $password);
        $this->id = $id;
    }

    public function validimi() {
        $this->validoId();
        parent::validimi();  

        return empty($this->merrIdError()) && empty($this->merrEmrinError()) && empty($this->merrEmailError()) && empty($this->merrPasswordError());
    }

    private function validoId() {
        if (empty($this->id)) {
            $this->id_error = "ID .";
        } elseif (!ctype_digit($this->id)) {
            $this->id_error = "ID duhet te permbaje vetem numra.";
        }
    }

    public function validoEmail() {
        parent::validoEmail();
    }

   
    public function validoPassword() {
        parent::validoPassword();
    }

    public function merrIdError() {
        return $this->id_error;
    }
}
?>