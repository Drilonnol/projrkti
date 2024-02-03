<?php
include_once('LidhjaBileta.php');

if (!isset($_SESSION)) {
    session_start();
}

class Biletat
{
    private $biletaID;
    private $emri;
    private $destinacioni;
    private $data;

    public function __construct($biletaID,$emri, $destinacioni, $data)
    {
        $this->biletaID = $biletaID;
        $this->emri = $emri;
        $this->destinacioni = $destinacioni;
        $this->data = $data;
    }

    public function getBiletaID()
    {
        return $this->biletaID;
    }

    public function setBileta($biletaID)
    {
        $this->biletaID = $biletaID;
    }

    public function getEmri()
    {
        return $this->emri;
    }

    public function setEmri($emri)
    {
        $this->emri = $emri;
    }

    public function getDestinacioni()
    {
        return $this->destinacioni;
    }

    public function setDestinacioni($destinacioni)
    {
        $this->destinacioni = $destinacioni;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
}
?>