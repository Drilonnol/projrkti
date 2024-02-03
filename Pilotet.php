<?php
    class Pilotet{
        
        private $id;
        private $emri;
        private $mbiemri;
        private $vitiLindjes;
        private $img;

        public function __construct($id, $emri,$mbiemri,$vitiLindjes,$img){
            $this->id = $id;
            $this->emri = $emri;
            $this->mbiemri = $mbiemri;
            $this->vitiLindjes = $vitiLindjes;
            $this->img = $img;
            
            }
        
            public function getId() {
                return $this->id;
            }
        
            public function getEmri() {
                return $this->emri;
            }
        
            public function getMbimeri() {
                return $this->mbiemri;
            }
            public function getVitiLindjes() {
                return $this->vitiLindjes;
            }
        
            public function getImg() {
                return $this->img;
            }
            public function setEmri($emri) {
                return $this->emri=$emri;
            }
        
            public function setvitiLindjes($vitiLindjes) {
                return $this->vitiLindjes-$vitiLindjes;
            }
        
            public function setImg($img) {
                return $this->img=$img;
            }
            public function __toString() {
                return $this->id." - ".$this->emri." ".$this->mbiemri." ".$this->vitiLindjes." ".$this->img;
            }

        }






    




?>