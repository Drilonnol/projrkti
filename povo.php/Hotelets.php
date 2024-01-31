
<?php
 class Hoteles {
    private $hotel_id;
    private $Emri;
    private $Vendi;
    private $kohaQendrimit;
    private $Qmimi;
    private $Nrpersona;
    private $img;

    public function __construct($hotel_id, $Emri, $Vendi, $kohaQendrimit, $Qmimi, $Nrpersona, $img) {
        $this->hotel_id = $hotel_id;
        $this->Emri = $Emri;
        $this->Vendi = $Vendi;
        $this->kohaQendrimit = $kohaQendrimit;
        $this->Qmimi = $Qmimi;
        $this->Nrpersona = $Nrpersona;
        $this->img = $img;
    }
        public function getEmri() {
            return $this->Emri;
        }
    
        public function getVendi() {
            return $this->Vendi;
        }
    
        public function getKohaQendrimit() {
            return $this->kohaQendrimit;
        }
    
        public function getQmimi() {
            return $this->Qmimi;
        }
    
        public function getNrpersona() {
            return $this->Nrpersona;
        }
    
        public function setEmri($Emri) {
            $this->Emri = $Emri;
        }
    
        public function setVendi($Vendi) {
            $this->Vendi = $Vendi;
        }
    
        public function setKohaQendrimit($kohaQendrimit) {
            $this->kohaQendrimit = $kohaQendrimit;
        }
    
        public function setQmimi($Qmimi) {
            $this->Qmimi = $Qmimi;
        }
    
        public function setNrpersona($Nrpersona) {
            $this->Nrpersona = $Nrpersona;
        }
    
        public function getHotelId() {
            return $this->hotel_id;
        }
    
        public function setHotelId($hotel_id) {
            $this->hotel_id = $hotel_id;
        }
        public function getImg(){
            return $this->img;
        }
        public function setImg($img){
            $this->img=$img;
        }
        public function __toString() {
            return "Hotel ID: " . $this->hotel_id . ", Emri: " . $this->Emri . ", Vendi: " . $this->Vendi .
                   ", Koha Qendrimit: " . $this->kohaQendrimit . ", Qmimi: " . $this->Qmimi .
                   ", Nr persona: " . $this->Nrpersona . ", img: " . $this->img;
        }
    }
    ?>