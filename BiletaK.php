<?php
 class Biletes {
    private $biletaID;
    private $emriBiletes;
    private $nga;
    private $deri;
    private $dataa;
    private $NrPasagjerve;

    public function __construct($biletaID, $emriBiletes, $nga, $deri, $dataa,$NrPasagjerve) {
        $this->biletaID = $biletaID;
        $this->emriBiletes = $emriBiletes;
        $this->nga = $nga;
        $this->deri = $deri;
        $this->dataa = $dataa;
        $this->NrPasagjerve=$NrPasagjerve;
    }
        public function getEmriBiletes() {
            return $this->emriBiletes;
        }
    
        public function getNga() {
            return $this->nga;
        }
    
        public function getderi() {
            return $this->deri;
        }
    
        public function getDataa() {
            return $this->dataa;
        }
    
        public function setEmriBiletes($emriBiletes) {
            $this->emriBiletes = $emriBiletes;
        }
    
        public function setNga($nga) {
            $this->nga = $nga;
        }
    
        public function setDeri($deri) {
            $this->deri = $deri;
        }
    
        public function setData($dataa) {
            $this->dataa = $dataa;
        }
    
        public function setNumriPasagjerve($NrPasagjerve) {
            $this->NrPasagjerve = $NrPasagjerve;
        }
        public function getNumriPasagjerve() {
            $this->NrPasagjerve;
        }
    
        public function getBiletaId() {
            return $this->biletaID;
        }

        public function __toString() {
            return "Bileta ID: " . $this->biletaID . ", Emri: " . $this->emriBiletes . ", Nga: " . $this->nga .
                   ", deri: " . $this->deri . ", Data: " . $this->dataa ." ".$this->NrPasagjerve;
        }
    }
    ?>