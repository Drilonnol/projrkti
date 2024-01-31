<?php
include_once 'lidhjaHotel.php';

class HotelsRepository {
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnectionii;
        $this->connection = $conn->startConnection();
    }

    public function getAllHotels() {
        $query = "SELECT * FROM hotel";
        $result = $this->connection->query($query);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getHotelById($hotelId) {
        $query = "SELECT * FROM hotel WHERE hotel_id = :hotelId";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':hotelId', $hotelId);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editHotel($hotelId, $hotelName, $location, $checkInTime, $price, $capacity) {
        $query = "UPDATE hotel SET Emri = :hotelName, Vendi = :location, kohaQendrimit = :checkInTime, Qmimi = :price, Nrpersona = :capacity WHERE hotel_id = :hotelId";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':hotelId', $hotelId);
        $stmt->bindParam(':hotelName', $hotelName);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':checkInTime', $checkInTime);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':capacity', $capacity);
        $stmt->execute();
    }

    public function insertHotel($hotel) {
        $conn = $this->connection;

        $emri = $hotel->getEmri();
        $vendi = $hotel->getVendi();
        $kohaQendrimit = $hotel->getKohaQendrimit();
        $qmimi = $hotel->getQmimi();
        $nrPersona = $hotel->getNrpersona();
        $img = $hotel->getImg();

        $sql = "INSERT INTO hotel(Emri, Vendi, kohaQendrimit, Qmimi, Nrpersona, img) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $vendi, $kohaQendrimit, $qmimi, $nrPersona, $img]);

        echo "<script>alert('U shtua me sukses!')</script>";
    }
}
?>