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
        $query = "SELECT * FROM hotel WHERE id = :hotelId";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':hotelId', $hotelId);
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (is_array($result)) {
            $emri = $result['Emri'];
            $vendi = $result['Vendi'];
            $kohaQendrimit = $result['kohaQendrimit'];
            $qmimi = $result['Qmimi'];
            $nrPersona = $result['Nrpersona'];
    
        
        } else {
          
        }
        
        return $result;
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

    public function updateHotelUsingQuery($hotelId, $hotelName, $location, $checkInTime, $price, $capacity, $newImagePath) {
        try {
            $query = "UPDATE hotel SET Emri = :hotelName, Vendi = :location, kohaQendrimit = :checkInTime, Qmimi = :price, Nrpersona = :capacity, img = :newImagePath WHERE id = :hotelId";
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(':hotelName', $hotelName);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':checkInTime', $checkInTime);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':capacity', $capacity);
            $stmt->bindParam(':newImagePath', $newImagePath);
            $stmt->bindParam(':hotelId', $hotelId);
    
            $stmt->execute();
    
            if ($stmt->rowCount() > 0) {
              
                echo "Hoteli u përditësua me sukses!";
            } else {
                echo "Nuk u bë asnjë ndryshim në hotel.";
            }
        } catch (PDOException $e) {
        
            echo "Gabim gjatë përditësimit të hotelit: " . $e->getMessage();
        }
    }
    function deleteHotel($id){
        $conn = $this->connection;
        $sql = "DELETE FROM hotel WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }
}



?>