<?php
include_once 'RezervimiLidja.php';

class ReservationsRepository {
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnectioniiii;
        $this->connection = $conn->startConnection();
    }
    public function getAllRezervimet() {
        $conn = $this->connection;
        $sql = "SELECT * FROM rezerv";
        $statement = $conn->query($sql);
        $hotelog = $statement->fetchAll();
        return $hotelog;
    }
    public function insertReservation($rezervim) {
        $conn = $this->connection;
        $rezervim_id = $rezervim->getRezervimId();
        $emri = $rezervim->getEmri();
        $mbiemri = $rezervim->getMbiemri();
        $email = $rezervim->getEmail();
        $nrTelefoni = $rezervim->getNrTelefoni();
        $adresa = $rezervim->getAdresa();
        $hotelId = $rezervim->getHotelId();

        $sql = "INSERT INTO rezerv(id,Emri, Mbiemri, Email, Address, NrTel, hotel_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $statement = $conn->prepare($sql);
      $statement->execute([$rezervim_id,$emri, $mbiemri, $email, $adresa, $nrTelefoni, $hotelId]);


        echo "<script>alert('Rezervimi u krye me sukses!')</script>";
    }
    public function getRezervById($hotelId) {
        $conn = $this->connection;
        $sql = "SELECT * FROM rezerv WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$hotelId]);
        $Hotellog=$statement->fetch();
       
        return $Hotellog;
    }
}
?>