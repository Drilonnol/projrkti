<?php
class Rezervimi {
    private $rezervim_id;
    private $emri;
    private $mbiemri;
    private $email;
    private $nr_telefoni;
    private $adresa;
    private $hotel_id;

    public function __construct($rezervim_id, $emri, $mbiemri, $email, $adresa, $nr_telefoni, $hotel_id) {
        $this->rezervim_id = $rezervim_id;
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->nr_telefoni = $nr_telefoni;
        $this->adresa = $adresa;
        $this->hotel_id = $hotel_id;
    }
    public function getEmri() {
        return $this->emri;
    }

    public function getMbiemri() {
        return $this->mbiemri;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getHotelId() {
        return $this->hotel_id;
    }

    public function setEmri($emri) {
        $this->emri = $emri;
    }

    public function setMbiemri($mbiemri) {
        $this->mbiemri = $mbiemri;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setHotelId($hotel_id) {
        $this->hotel_id = $hotel_id;
    }

    public function getRezervimId() {
        return $this->rezervim_id;
    }

    public function setRezervimId($rezervim_id) {
        $this->rezervim_id = $rezervim_id;
    }
    public function getNrTelefoni() {
        return $this->nr_telefoni;
    }

    public function setNrTelefoni($nr_telefoni) {
        $this->nr_telefoni = $nr_telefoni;
    }

    public function getAdresa() {
        return $this->adresa;
    }

    public function setAdresa($adresa) {
        $this->adresa = $adresa;
    }
    public function __toString() {
        return "Rezervimi ID: " . $this->rezervim_id . ", Emri: " . $this->emri . ", Mbiemri: " . $this->mbiemri .
               ", Email: " . $this->email . ", Adresa: " . $this->adresa . ", Nr.TelefonitAdresa: " . $this->nr_telefoni .
               ", Hotel ID: " . $this->hotel_id;
    }
}
?>