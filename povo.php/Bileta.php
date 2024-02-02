<?php
include_once('Hotelets.php');
class Bileta extends Hoteles {
    private $vendimberritjes;

    public function __construct($hotel_id, $Emri, $Vendi, $kohaQendrimit, $Qmimi, $Nrpersona, $img, $vendimberritjes) {
        parent::__construct($hotel_id, $Emri, $Vendi, $kohaQendrimit, $Qmimi, $Nrpersona, $img);
        $this->vendimberritjes = $vendimberritjes;
    }

    public function getVendimberritjes() {
        return $this->vendimberritjes;
    }

    public function setVendimberritjes($vendimberritjes) {
        $this->vendimberritjes = $vendimberritjes;
    }

    public function __toString() {
        return parent::__toString() . ", Vendimberritjes: " . $this->vendimberritjes;
    }
}
?>